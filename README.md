# twitter-nest
Tools for creating a decentralized Twitter clone on WordPress.

Live demo: https://s.qiouyi.lu/tweets

----

## Available tools

### tweetsJS-to-tweetsCSV.pl

Perl command line script to convert tweets.js from a downloaded Twitter archive to a CSV that can be imported to WordPress with a CSV import plugin.

----

## Tools in development

*Key:*<br />
⭕️ not yet started<br />
🟡 in progress<br />
✅ done<br />

### Instructions and documentation

⭕️ installing a fresh WordPress for nest<br />
⭕️ signing up for Twitter developer account if you want automated backups<br />
⭕️ installing necessary WordPress plugins<br />
⭕️ installing and modding theme<br />
⭕️ how to run script to convert archive to CSV<br />
⭕️ how to import archive to WordPress<br />
⭕️ nest workflow: tweets created from WordPress will not be published to Twitter (would create archive loop), but publishing to Twitter will save back to WordPress

### glitch.me browser app for tweetsJS-to-tweetsCSV.pl

⭕️ create interface on glitch.me so you can convert files without using the command line<br />
⭕️ may need to include file chunking if browser hangs on large archives<br />
⭕️ need to ensure no data is stored on glitch's servers<br />

### Fork of <a href="https://github.com/ozh/ozh-tweet-archiver">ozh/ozh-tweet-archiver</a>

⭕️ add ability to auto-import multimedia—plugin currently hotlinks to Twitter, need a way to make a local backup, ideally include some mechanism to define import size limits and specify which types are downloaded (e.g. exclude video)
⭕️ add flag when tweet data has been edited on WordPress and varies from import, see mastodon implementation suggestion: https://github.com/mastodon/mastodon/issues/981#issuecomment-493412480 (adding "edited on" and timestamp likely sufficient, prefer integrating a diffchecker plugin to make changes readable)<br />
⭕️ integrate WP Twitter Threads unroller https://wordpress.org/plugins/wp-twitter-threads/ (need to verify if thread unrolled within last 3,200 tweets will remain unrolled once it goes past the 3,200 threshold)

### Fork of <a href="https://github.com/ozh/ozh-tweet-archiver-theme">ozh/ozh-tweet-archiver-theme</a>

🟡 rewrite using semantic tags instead of `<div>`s<br />
✅ add Twitter references and tools sidebar<br />
⭕️ rewrite for proper responsiveness<br />
⭕️ add web intents to allow likes & retweets from nest<br />
⭕️ add WordPress customizer GUI support with editable widgets<br />
✅ include page of links to Twitter settings (*demo:* https://s.qiouyi.lu/tweets/settings)

### Fork of wordpress-dashboard-twitter

Not on Github: https://wordpress.org/plugins/wordpress-dashboard-twitter/

⭕️ add support for 280-character tweets<br />
⭕️ add web intents to support liking tweets from dashboard<br />
⭕️ add support for conversational context & threads<br />
⭕️ add infinite scroll or at least increase number of tweets visible on load

### Twitter contact management tool

⭕️ import list of Twitter users as WordPress users<br />
⭕️ use native WordPress user management tools to annotate users and add contact information

----

## About the author

Finally, the skills I learned to process linguistic corpora come in handy for processing Twitter data, which is, ultimately, speech data. :)

Site: <a href="https://s.qiouyi.lu/" target="_new">s.qiouyi.lu</a><br />
Email: <a href="mailto:s@qiouyi.lu">s@qiouyi.lu</a><br />
Twitter: <a href="https://twitter.com/sqiouyilu" target="_new">@sqiouyilu</a>

*Tip Jars*

Direct: https://s.qiouyi.lu/shop/tip-jar/<br />
PayPal: https://paypal.me/sqiouyilu<br />
Venmo: @sqiouyilu<br />
Cashapp: $sqiouyilu
