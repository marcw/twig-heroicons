all:
	yarn
	mkdir -p resources/heroicons
	cp -r node_modules/heroicons/outline resources/heroicons/
	cp -r node_modules/heroicons/solid resources/heroicons/
	cp node_modules/heroicons/LICENSE resources/heroicons/
