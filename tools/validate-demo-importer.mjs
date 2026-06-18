import { readFileSync } from 'node:fs';

const importerPath = 'demo-content/importer.php';
const importer = readFileSync(importerPath, 'utf8');
const errors = [];

const definitions = new Set(
	[...importer.matchAll(/function\s+(linea_(?:import_demo_content|demo_[a-z0-9_]+))\s*\(/g)].map((match) => match[1])
);

const calls = new Set(
	[...importer.matchAll(/\b(linea_(?:import_demo_content|demo_[a-z0-9_]+))\s*\(/g)].map((match) => match[1])
);

for (const call of calls) {
	if (!definitions.has(call)) {
		errors.push(`${importerPath} calls ${call}() but does not define it.`);
	}
}

for (const required of [
	'linea_import_demo_content',
	'linea_demo_create_categories',
	'linea_demo_create_placeholder_attachments',
	'linea_demo_create_posts',
	'linea_demo_create_comments',
	'linea_demo_create_navigation',
	'linea_demo_story_data',
]) {
	if (!definitions.has(required)) {
		errors.push(`${importerPath} is missing required function ${required}().`);
	}
}

if (!importer.includes('_linea_demo_story')) {
	errors.push(`${importerPath} must mark generated posts so imports stay idempotent.`);
}

if (!importer.includes('_linea_demo_placeholder')) {
	errors.push(`${importerPath} must mark generated media so imports stay idempotent.`);
}

if (errors.length) {
	console.error(errors.map((error) => `- ${error}`).join('\n'));
	process.exit(1);
}

console.log(`Validated ${importerPath} helper coverage and idempotency markers.`);
