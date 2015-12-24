Analysis by Seth
=

Okay so this might not be exactly how to go about it but
from what I understand, I would break it down like so:

**facebook api**

    - have user authorize you to access their feed (facebook auth)
    - use facebook auth to request user data (using a simple script) https://developers.facebook.com/docs/graph-api/reference/v2.5/user/feed
    - batch the requests for each user at specific intervals throughout the day; this is determined by rate limiting, so you can only make x requests a day (make them count) https://developers.facebook.com/docs/graph-api/making-multiple-requests
    - save the returned query's posts in your db according to the user_id –- you can either save the raw JSON if you use a DB capable of querying json (postgres, mongo, etc.) or you can map your model according to facebook's data and prune accordingly

**website**

    - simple sign up form
    - ask for permissions from facebook once they sign up using something like oAuth
    - save facebook token in the user table
    - let them know they are signed up and send them on their way
    - 4 steps for the user (sign-up, agree to permissions, read success message, acquire newsletter )

**newsletter**

    - aggregation of posts
        - simplest thing is just to use `shares` count
        - take all posts, order by shared number, pick top n for the newsletter
        - once you have the posts in your db, you can figure out other interesting metrics, but the most interesting ones will only come once you've acquired some data and you can play around with it.
    - design of newsletter (keep facebook's styling for posts?)

** Getting Started **

    - Get a facebook API key and write a script that requests a user's feed
    - Read up on how to batch requests so you get more data per request https://developers.facebook.com/docs/graph-api/making-multiple-requests
    - Create simple web sign up form that uses facebook auth https://developers.facebook.com/products/login
    - Save that token and ask the user for their email; save that email address in the db somewhere
    - Now you have all the information you need to make a newsletter!