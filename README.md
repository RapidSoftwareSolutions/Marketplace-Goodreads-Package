[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/GoodReads/functions?utm_source=RapidAPIGitHub_GoodReadsFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# GoodReads Package
Read thousands of book reviews by your friends and other Goodreads members, keep a virtual bookshelf of what you've read, and build your to-read list as you discover great books on the website.Goodreads is a free service for everyone who reads. We have more than 35 million members who have added more than 1 billion books.
* Domain: [www.goodreads.com](https://www.goodreads.com)
* Credentials: apiKey, apiSecret

## How to get credentials: 
0. Register on the [www.goodreads.com](https://www.goodreads.com) 
1. Create Goodreads application in [console](https://www.goodreads.com/api/keys)
3. After creation app, you will receive apiKey and apiSecret
 
## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## GoodReads.getRequestToken
Get Request Token using OAuth.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key from app console.
| apiSecret| credentials| Api secret from app console.

## GoodReads.getAccessCredentials
Get Access Credentials (accessToken/accessTokenSecret), after getRequestToken use `/oauth/authorize` url.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Api key from app console.
| apiSecret       | credentials| Api secret from app console.
| oauthToken      | String     | The oauthToken obtained from getAccessCredentials.
| oauthTokenSecret| String     | The oauthTokenSecret Token obtained from getAccessCredentials.

## GoodReads.getAuthorizedUser
Get an response with the Goodreads user_id for the user who authorized access using OAuth.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.

## GoodReads.getAuthorBooks
Get a response with a paginated list of an authors books.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key from app console.
| authorId  | String     | Goodreads Author id.
| pageNumber| Number     | page number,1-N (default 1)

## GoodReads.getAuthorInfo
Get a response with info about an author.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key from app console.
| authorId| String     | Goodreads Author id.

## GoodReads.followAnAuthor
Make the signed-in user follow an author.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| authorId         | String     | Goodreads Author id.

## GoodReads.unfollowAnAuthor
Unfollow an author.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| authorId         | String     | Goodreads Author id.

## GoodReads.getAuthorFollowingInformation
Get a response using OAuth describing the association between a user and an author.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| authorId         | String     | Goodreads Author id.

## GoodReads.getBookIdByISBNs
Get Goodreads book IDs given one or more ISBNs. Response contains IDs without any markup.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| isbn  | String     | ISBNs of books to look up.

## GoodReads.getWorkIdByBookId
Get Goodreads work IDs given one or more Goodreads book IDs. Response contains work IDs without any markup.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| bookId| String     | Book IDs of books to look up.

## GoodReads.getReviewStatisticsByISBNs
Get review statistics for books given a list of ISBNs.You can mix ISBN10s and ISBN13s, but you'll receive a 422 error if you don't specify any, and you'll receive a 404 if none are found.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| isbns | List       | List of ISBNs .(1000 ISBNs per request max.)

## GoodReads.getBookReview
Get a response that contains embed code for the iframe reviews widget. The reviews widget shows an excerpt (first 300 characters) of the most popular reviews of a book for a given internal Goodreads book_id. Reviews of all known editions of the book are included.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key from app console.
| bookId  | String     | A Goodreads internal book_id.
| textOnly| Select     | Only show reviews that have text (default false).
| rating  | Number     | Show only reviews with a particular rating.

## GoodReads.getBookReviewsByISBN
Get a response that contains embed code for the iframe reviews widget that shows excerpts (first 300 characters) of the most popular reviews of a book for a given ISBN. The reviews are from all known editions of the book.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| isbn  | String     | The ISBN of the book to lookup.
| userId| String     | Single user id.
| rating| Number     | Show only reviews with a particular rating.

## GoodReads.getBookReviewsByTitle
Get a response that contains embed code for the iframe reviews widget, which shows an excerpt (first 300 characters) of the most popular reviews of a book for a given title/author. The book shown will be the most popular book that matches all the keywords in the input string. The reviews are from all known editions of the book.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key from app console.
| authorName| String     | The title of the book to lookup.
| title     | String     | The author name of the book to lookup. This is optional, but is recommended for accuracy.
| rating    | Number     | Show only reviews with a particular rating.

## GoodReads.createComment
Creates a new comment. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| type             | Select     | The title of the book to lookup.
| resourceId       | Number     | Id of resource given as type param.
| commentBody      | String     | Comment body.

## GoodReads.getCommentsList
Creates a new comment. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| type             | Select     | The title of the book to lookup.
| resourceId       | Number     | Id of resource given as type param.
| page             | String     | 1-N (optional, default 1).

## GoodReads.getEventsInYourArea
Shows events nearby the authenticating user or you can get a list of events near a location by passing lat/lng coordinates.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key from app console.
| coordinates| Map        | Coordinates of location.
| title      | String     | The author name of the book to lookup. This is optional, but is recommended for accuracy.
| countryCode| String     | 2 characters country code.
| ZIPcode    | String     | ZIP code.

## GoodReads.followUser
Start following a user using OAuth. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| userId           | Number     | Goodreads user id of the user you want to stop following.

## GoodReads.unfollowUser
Stop following a user using OAuth. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| userId           | Number     | Goodreads user id of the user you want to stop following.

## GoodReads.confirmFriendRequest
Confirm a friend request for the current user using OAuth. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| friendRequestId  | Number     | friend request id.

## GoodReads.declineFriendRequest
Decline a friend request for the current user using OAuth. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| friendRequestId  | Number     | friend request id.

## GoodReads.getFriendRequests
Returns a XML with the current user's friend requests 'using OAuth. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| page             | Number     | Page: 1-N page of results to show (optional, default 1).

## GoodReads.addFriend
Sends a friend request to a user using OAuth. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| friendId         | Number     | Goodreads user id for friend.

## GoodReads.joinGroup
Let the current user join a given group using OAuth. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| groupId          | Number     | id of the group.

## GoodReads.getUserGroups
Returns list of groups the user specified by id belongs to.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| userId| Number     | Goodreads user id of the user
| sort  | Select     | 'Members' will sort by number of members in the group.

## GoodReads.getGroupMembers
Returns list of groups the user specified by id belongs to.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key from app console.
| groupId    | Number     | Goodreads group id of the group.
| sort       | Select     | Select sort type.
| listOfNames| List       | List of names to search for. Optional, will find all members by default.
| page       | Number     | Which page of results to show (default 1).

## GoodReads.getGroupBySearchQuery
Search group titles and descriptions for the given string.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key from app console.
| page       | Number     | Which page of results to show (default 1).
| searchQuery| Number     | Which page of results to show (default 1).

## GoodReads.getGroup
Get info about a group by id.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Api key from app console.
| sort   | Select     | Field to sort topics by..
| order  | Select     | Field to sort topics by.
| groupId| Number     | Id of the group.

## GoodReads.GetlistopiasByBookId
Get the listopia lists for a given book.Version of list/book.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| bookId| Number     | Id of the book.

## GoodReads.getCurrentUsersNotifications
Viewing any new notifications here will mark them as `viewed`.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| page             | Number     | Which page of results to show (default 1).

## GoodReads.addOwnedBook
Adds a book to user's list of owned books.You'll need to register your app (required). 

| Field                   | Type       | Description
|-------------------------|------------|----------
| apiKey                  | credentials| Api key from app console.
| apiSecret               | credentials| Api secret from app console.
| accessToken             | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret       | String     | The Access Secret Token obtained from getAccessCredentials.
| bookId                  | Number     | Id of the book.
| conditionCode           | Select     | one of 10 (brand new), 20 (like new), 30 (very good), 40 (good), 50 (acceptable), 60 (poor).
| conditionDescription    | String     | description of book's condition.
| originalPurchaseDate    | DatePicker | When book was purchased.
| originalPurchaseLocation| String     | Where this book was purchased.
| uniqueCode              | String     | BookCrossing id (BCID).

## GoodReads.getListOwnedBooksByUserId
List books owned by a user.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| userId           | Number     | Goodreads user_id.
| page             | Number     | Which page of results to show (default 1).

## GoodReads.getOwnedBooks
List books owned by a user.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| ownedBookId      | Number     | ownedBookId is a unique identifier for the owned book (not a book_id).

## GoodReads.updateOwnedBook
Updates a book a user owns.You'll need to register your app (required). 

| Field                   | Type       | Description
|-------------------------|------------|----------
| apiKey                  | credentials| Api key from app console.
| apiSecret               | credentials| Api secret from app console.
| accessToken             | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret       | String     | The Access Secret Token obtained from getAccessCredentials.
| ownedBookId             | Number     | id of the owned book record.
| bookId                  | Number     | Id of the book.
| conditionCode           | Select     | one of 10 (brand new), 20 (like new), 30 (very good), 40 (good), 50 (acceptable), 60 (poor).
| conditionDescription    | String     | description of book's condition.
| originalPurchaseDate    | DatePicker | When book was purchased.
| originalPurchaseLocation| String     | Where this book was purchased.
| uniqueCode              | String     | BookCrossing id (BCID).

## GoodReads.deleteOwnedBook
Deletes a book a user owns. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| ownedBookId      | Number     | ownedBookId is a unique identifier for the owned book (not a book_id).

## GoodReads.addQuote
If you don't specify an author_id, it will try to look one up based on the author_name you provide. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| authorName       | String     | Name of the quote author.
| authorId         | String     | Id of the author.
| bookId           | String     | Id of the book from which the quote was taken.
| quoteBody        | String     | The quote.
| quotaTags        | List       | List of quota tags.
| isbn             | String     | ISBN of the book from which the quote was taken. This will not override the book_id if it was provide.

## GoodReads.likeResource
Like a resource (e.g. review or status update). You'll need to register your app (required). 

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| rating           | Number     | Resource rating.
| resourceId       | Number     | Id of the resource being liked.
| resourceType     | String     | Camel case name of the resource type (e.g. UserStatus, Review).

## GoodReads.unlikeResource
Unlike a resource (e.g. review or status update). You'll need to register your app (required). 

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| ratingId         | Number     | Rating id.

## GoodReads.getUsersReadStatus
Get information about a read status update.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key from app console.
| statusId| Number     | Read status id.

## GoodReads.getRecommendation
Get information about a particular recommendation that one user made for another. Includes comments and likes. You'll need to register your app (required).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| recommendationId | Number     | Recommendation id.

## GoodReads.createReview
Add book reviews for members. You'll need to register your app (required). 

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| bookId           | Number     | Goodreads book_id.
| textReview       | String     | Text of the review.
| reviewRating     | Number     | Rating (0-5) (optional, default is 0 (No rating))
| reviewDate       | DatePicker | Date (YYYY-MM-DD format, e.g. 2008-02-01)
| shelf            | String     | read|currently-reading|to-read|<USER SHELF NAME> (optional, must exist)

## GoodReads.updateReview
Edit a book review.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| reviewId         | Number     | Goodreads review id.
| bookId           | Number     | Goodreads book_id.
| textReview       | String     | Text of the review.
| reviewRating     | Number     | Rating (0-5) (optional, default is 0 (No rating))
| reviewDate       | DatePicker | Date (YYYY-MM-DD format, e.g. 2008-02-01)
| shelf            | String     | read|currently-reading|to-read|<USER SHELF NAME> (optional, must exist)
| finished         | Select     | True to mark finished reading.

## GoodReads.deleteReview
Deletes a book review.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| reviewId         | Number     | Goodreads review id.

## GoodReads.getBooksOnMembersShelf
Get the books on a members shelf. Customize the feed with the below variables. Viewing members with profiles who have set them as visible to members only or just their friends.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key from app console.
| variable   | String     | Customize the feed with the below variables.
| userId     | Number     | Goodreads id of the user.
| shelf      | Number     |  read, currently-reading, to-read, etc.
| sort       | Select     | Sort type.
| searchQuery| String     | Query text to match against member's books.
| order      | Select     | Field to sort topics by.
| page       | Number     | Which page of results to show (default 1).
| perPage    | Number     | Count of item in page.

## GoodReads.getAllRecentReviews
Get a response with the most recently added reviews from all members.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.

## GoodReads.getReview
Get a response that contains the review and rating.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key from app console.
| reviewId| Number     | Id of the review.
| page    | Number     | Which page of results to show (default 1).

## GoodReads.getUserReviewForBook
Get a response that contains the review and rating for the specified book and user.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKey             | credentials| Api key from app console.
| userId             | Number     | Id of the user.
| bookId             | Number     | Id of the book.
| includeReviewOnWork| Select     | 'true' or 'false' indicating whether to return a review for another book in the same work if review not found for the specified book.

## GoodReads.getAuthorByName
Get an response with the Goodreads url for the given author name.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key from app console.
| authorName| String     | Name of the author.

## GoodReads.getBooksByMultipleFields
Get a response with the most popular books for the given query. This will search all books in the title/author/ISBN fields and show matches, sorted by popularity on Goodreads. There will be cases where a result is shown on the Goodreads site, but not through the API. This happens when the result is an Amazon-only edition and we have to honor Amazon's terms of service.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key from app console.
| title      | String     | Title of the book.Supports boolean operators and phrase searching.
| authorName | String     | Author of the book.Supports boolean operators and phrase searching.
| isbn       | String     | ISBN fields.Supports boolean operators and phrase searching.
| serachField| Select     | Field to search,(default is 'all').
| page       | Number     | Which page of results to show (default 1).

## GoodReads.getSeries
Info on a series.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key from app console.
| seriesId| Number     | Id of the series.

## GoodReads.getSeriesByAuthorId
List of all series by an author.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key from app console.
| authorId| Number     | Id of the author.

## GoodReads.getSeriesByWorkId
List of all series a work is in.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| workId| Number     | Id of the work.

## GoodReads.addBookToShelf
Add a book to a shelf.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| bookId           | Number     | Id of the book to add to the shelf.
| shelfName        | Number     | Name of the shelf.

## GoodReads.removeBookFromShelf
Remove a book from a shelf.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| bookId           | Number     | Id of the book to add to the shelf.

## GoodReads.addBooksToMultipleShelves
Add a list of books to many current user's shelves.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| booksIds         | List       | Ids of the books to add to the shelf.
| shelvesIds       | List       | Ids of the shelfs.

## GoodReads.getUserShelves
Lists shelves for a user.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| page  | Number     | Which page of results to show (default 1).
| userId| Number     | Goodreads user id.

## GoodReads.createTopic
Create a new topic.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| subjectType      | Select     | Either 'Book' or 'Group'. If 'Book', the book the topic is about. If 'Group', the group that the topic belongs to.
| subjectId        | Number     | The id for the subject the topic belongs to, either bookId or groupId, as appropriate.
| folderId         | Number     | If the subject is a group, you can supply a folder id to add the topic to. Be sure that the folder belongs to the group. By default, if the subject_type is 'Group', then the topic will be added to the 'general' folder.
| topicTitle       | String     | Title for the topic.
| questionFlag     | Select     | Indicates whether the topic is a discussion question ('true') or not ('false'). Default is false (non-question).
| bodyUsertext     | String     | The text of the comment that starts the topic thread. Can include Goodreads book/author tags of the form [book:Title|ID]
| updateFeed       | Select     | Indicates whether the comment for the new topic should be added to the user`s update feed. To enable, set to `on`; otherwise, default is not to add to update feed.
| digest           | Select     | Indicates whether the user would like to receive an email when someone replies to the topic (user will get one email only). To enable, set to 'on'; otherwise, default is not to add to update feed.

## GoodReads.getListTopicsByGroupFolder
Returns a list of topics in a group's folder specified either by folder id or by group id. 

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key from app console.
| groupId | Number     |  If supplied and id is set to 0, then will return topics from the general folder for the group indicated by.
| folderId| Number     | If id is non-zero, this param is ignored. Note: may return 404 if there are no topics in the general folder for the specified group.
| page    | Number     | Which page of results to show (default 1).
| sort    | Select     | Sort type.
| order   | Select     | Field to sort topics by.

## GoodReads.getTopic
Version of topic/show.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Api key from app console.
| topicId| Number     | Id of the topic.

## GoodReads.getTopicsWithUnreadComments
Get a list of topics from a specified group that have comments added since the last time the user viewed the topic.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Api key from app console.
| groupId| Number     | Id of the group.
| viewed | Select     | Indicates whether to show topics user has viewed before or not. Default is to include all topics; set this param to 'true' or '1' to restrict to only topics the user has already viewed.
| page   | Number     | Which page of results to show (default 1).
| sort   | Select     | Field to sort topics by.
| order  | Select     | Field to sort topics by.

## GoodReads.getFriendUpdates
Get your friend updates (the same data you see on your homepage).

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| updateType       | Select     | :Type of update. Valid values are: books, reviews, statuses. (default all)
| updateFilter     | Select     | Which updates to show. Options are: friends (default - includes followers), following, top_friends.
| maxUpdates       | Number     | : The max limit of updates.

## GoodReads.createBookShelf
Add book shelves for members.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| shelfName        | Select     | Name of the new shelf.
| exclusiveFlag    | Select     | Default false.
| sortableFlag     | Select     | Default false.
| featured         | Select     | Default false.

## GoodReads.updateBookShelf
Add book shelves for members.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| shelfName        | Select     | Name of the new shelf.
| shelfId          | String     | Id of the shelf.
| exclusiveFlag    | Select     | Default false.
| sortableFlag     | Select     | Default false.
| featured         | Select     | Default false.

## GoodReads.getMember
Get a response with the public information about the given Goodreads user.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key from app console.
| memberId| Number     | Goodreads user id.

## GoodReads.getMemberByUsername
Get a response with the public information about the given Goodreads user.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key from app console.
| username| Number     | Goodreads member username.

## GoodReads.compareBooksWithMember
Get a response with stats comparing your books to another member's.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| userId           | String     | Id of the user.

## GoodReads.getUsersFollowers
Get a response with the given user's followers.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| page  | Number     | Which page of results to show (default 1).
| userId| Number     | id of the user.

## GoodReads.getPeopleUserIsFollowing
Get a response with people the given user is following.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| page  | Number     | Which page of results to show (default 1).
| userId| Number     | id of the user.

## GoodReads.getUserFriends
Get an xml response with the given user's friends.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| page             | Number     | Which page of results to show (default 1).
| userId           | Number     | id of the user.
| sort             | Select     | Sort type.

## GoodReads.updateUserStatus
Add status updates for members.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| bookId           | Number     | Id of the book being reviewed.
| bookPage         | Number     | Page of the book.
| percent          | Number     | Percent complete (use instead of page if appropriate).
| statusBody       | Number     | status update (required, unless page or percent is present, then it is optional).

## GoodReads.deleteUserStatus
Delete status updates for members.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Api key from app console.
| apiSecret        | credentials| Api secret from app console.
| accessToken      | String     | The Access Token obtained from getAccessCredentials.
| accessTokenSecret| String     | The Access Secret Token obtained from getAccessCredentials.
| userStatusId     | Number     | Id of the user status.

## GoodReads.getUserStatus
Get information about a user status update.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key from app console.
| userStatusId| Number     | Id of the user status.

## GoodReads.getUserRecentStatus
Get information about a user status update.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key from app console.
| userStatusId| Number     | Id of the user status.

## GoodReads.getAllEditionsByWork
List of all the available editions of a particular work. This API requires extra permission.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key from app console.
| workId| Number     | Id of the work.

