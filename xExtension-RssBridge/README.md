# Image Proxy extension

This FreshRSS extension sends added feeds through [RSS-Bridge](https://github.com/rss-bridge/rss-bridge), generating RSS and Atom feeds for websites that don't have one. This allows FreshRSS to instantly support hundreds of new sites, e.g. Facebook and Twitter.

To use it, upload this entire directory to the FreshRSS `./extensions` directory on your server and enable it on the extension panel in FreshRSS.

## Configuration settings

* `rss_bridge_url`: the URL for an RSS-Bridge instance e.g. `https://example.com/rss-bridge/`
