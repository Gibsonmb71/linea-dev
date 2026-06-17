import { chromium } from 'playwright';

const baseUrl = process.env.LINEA_TEST_URL || 'http://127.0.0.1:8899';
const browser = await chromium.launch({ headless: true });
const page = await browser.newPage({ viewport: { width: 1440, height: 1000 } });

try {
	await page.goto(baseUrl, { waitUntil: 'networkidle' });
	const text = await page.locator('body').innerText();
	const normalizedText = text.toLowerCase();
	const checks = {
		masthead: normalizedText.includes('linea test') || normalizedText.includes('linea'),
		editorPicks: normalizedText.includes('editor'),
		mostRead: normalizedText.includes('most read'),
		notOldPostsIndex: !text.includes('Recent reporting, features, opinion, sports, and student life coverage.'),
	};

	const failed = Object.entries(checks)
		.filter(([, passed]) => !passed)
		.map(([name]) => name);

	if (failed.length) {
		throw new Error(`Smoke checks failed: ${failed.join(', ')}`);
	}

	console.log(`Smoke checked Linea at ${baseUrl}`);
} finally {
	await browser.close();
}
