#!/bin/bash

# Set repository URL
REPO_NAME=$(basename `git rev-parse --show-toplevel`)
REPO_URL="https://${REPO_NAME}"

# Get today's date in YYYY-MM-DD format
TODAY=$(date +%Y-%m-%d)

# Start the robots.txt
echo "User-agent: *" > robots.txt
echo "Sitemap: ${REPO_URL}/sitemap.xml" >> robots.txt

# Dynamically add Disallow entries for non-PHP files and directories in the root
for entry in $(ls -p | grep -v /); do
    if [[ ! $entry =~ \.php$ && ! $entry =~ \.txt$ && ! $entry =~ \.xml$ ]]; then
        echo "Disallow: /$entry" >> robots.txt
    fi
done

for dir in $(ls -d */); do
    echo "Disallow: /$dir*" >> robots.txt
done

# Generate sitemap.xml
echo '<?xml version="1.0" encoding="UTF-8"?>' > sitemap.xml
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' >> sitemap.xml

# Add the root URL with priority 1.0
echo "  <url>" >> sitemap.xml
echo "    <loc>${REPO_URL}/</loc>" >> sitemap.xml
echo "    <lastmod>${TODAY}</lastmod>" >> sitemap.xml
echo "    <priority>1.0</priority>" >> sitemap.xml
echo "  </url>" >> sitemap.xml

# Add root PHP files to sitemap with priority 0.8
for file in *.php; do
    if [ -f "$file" ]; then # check if file exists and is a regular file
        echo "  <url>" >> sitemap.xml
        echo "    <loc>${REPO_URL}/${file}</loc>" >> sitemap.xml
        echo "    <lastmod>${TODAY}</lastmod>" >> sitemap.xml
        echo "    <priority>0.8</priority>" >> sitemap.xml
        echo "  </url>" >> sitemap.xml
    fi
done

echo '</urlset>' >> sitemap.xml