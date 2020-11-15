# RSS-Bridge extension

This FreshRSS extension sends added feeds through [RSS-Bridge](https://github.com/rss-bridge/rss-bridge), generating RSS and Atom feeds for websites that don't have one. This allows FreshRSS to instantly support [hundreds of new sites](https://github.com/RSS-Bridge/rss-bridge/tree/master/bridges), e.g. Facebook and Twitter.

To use it, upload this entire directory to the FreshRSS `./extensions` directory on your server and enable it on the extension panel in FreshRSS.

## Configuration settings

* `rss_bridge_url`: the URL for an RSS-Bridge instance e.g. `https://example.com/rss-bridge/`

## Bridge availability

Detection only works for bridges that are [whitelisted](https://github.com/RSS-Bridge/rss-bridge/wiki/Whitelisting) in RSS-Bridge. The `detectParameters` function inside a bridge is what allows URLs to be detected; not all bridges support this. Website changes will sometimes break bridges, so make sure you're running the most recent version of RSS-Bridge and [open an issue](https://github.com/RSS-Bridge/rss-bridge/issues) if you're still having problems.

It's recommended that you [selfhost RSS-Bridge](https://github.com/RSS-Bridge/rss-bridge/wiki/Installation) so can enable all the bridges you want to use and ensure all bridges are up to date.

If you don't want to selfhost, here are some [publically available instances](https://github.com/RSS-Bridge/rss-bridge/wiki/Public-hosts).
