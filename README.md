fb newsletter
=

An attempt to create an application that presents a user's facebook feed as a newsletter that self-publishes every month.

## Objectives

* Design, develop and deploy a the newsletter webapp
* Learn how to use the facebook Graph API
* Get better at software development in general
* Learn and take advantage of new tools and technologies
* Hopefully learn some machine learning stuff by the end

## Questions

There may be questions, so:

### How will you get content for the "newsletter" ?

Hopefully by interacting with the Graph API appropriately. Most of us haven't interacted with the Graph API in-depth and it will be interesting to see how far it will allow us to go.

### What do you mean "self-published" ?

The aim is that the creation/publication of the newsletter MUST NOT depend on a user clicking a button to "generate" the newsletter.

Basically, at the end of each month the system should aggregate the "most-interesting" posts
on a users facebook feed and create a newsletter (create and store printable pdf aswell).

This newsletter should then be available to the user via a url so that if "John Doe" wants to see a summary of what happened in January 2015 he just needs to visit: ```https://fb-newsletter-url/johndoe/newsletters/2015/01```

### How will your app determine the "most-interesting posts"?

We don't know yet. Maybe through some machine learning algorithms ;)

### What is your tech stack?

- [Ruby On Rails](http://rubyonrails.org/)
- [MySQL](http://www.mysql.org)
- [Bootstrap](http://getbootstrap.com)
- [jQuery](http://jquery.org)

## Development

Things we may want to cover for development:

* Ruby version >= 1.9.8

* System dependencies

    - Rails 4.2.5

* Configuration

* Database creation

* Database initialization

* How to run the test suite

* Services (job queues, cache servers, search engines, etc.)

* Deployment instructions

## Contributions?

This is mainly a learning and collaboration project among friends and since most of us are students we are willing to accept contributions; as long as we are learning ;).

So just fork this repo and create a pull request if you want your contributions to be considered.

## Team / Contributors

This is mainly a collaboration among friends:

**NB:** Clone this repo and add your name to the list

* [@zikani03](https://github.com/zikani03)


## LICENSE

MIT