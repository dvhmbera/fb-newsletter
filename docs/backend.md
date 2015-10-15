FB Newsletter Backend
==

The backend for the newsletter is composed of the following components:

- Newsletter API
- Feed Aggregator
- Publishing Bot
- Post analysis

## Newsletter API

The newsletter api is the primary service that users interact with via the clients (typically their browser - through the webapp).

Typically, the API should provides the following end-points/functionality:

**Retrieve users who are registered**

```bash
$ curl -G http://fb-newsletter.domain/api/users
```

**Monthly Newsletter data for a specific user**

So for example to retrieve `zikani`'s newsletter for January 2015

```bash
$ curl -G http://fb-newsletter.domain/api/zikani/newsletters/2015/01
```

**Simple Statistics**

Including how many posts have been included in "published" newsletters, when the last post was analysed, how many posts include pictures, links, etc..

```bash
$ curl -G http://fb-newsletter.domain/api/zikani/newsletters/stats
```

... and other stuff we come up with.

## Feed Aggregator

Simple process that runs in the background and collects/fetches content from the user's feed regularly.

**TODO: Figure out how this will work considering auth issues**

## Publishing Bot

Generates a newsletter at the end of each month based on posts collected by the feed watcher.

## Post analysis

Analyses posts to determine which ones make it into the newsletter. Ideally the decision whether to include a post will depend on variables like who posted it, when it was posted, how many comments, how many likes the post got, etc..

This will depend on how much the Graph API allows us to do.


**NB:** At this point these are just rough concepts for what we want to do