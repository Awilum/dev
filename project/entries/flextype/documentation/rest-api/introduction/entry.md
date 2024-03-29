---
title: Introducion
template: flextype/docs
order: 1
seo: 
  title: Introducion to the Flextype Rest APIs 
  description: Read the documentation about Flextype Rest APIs
breadcrumbs:
  1:
    title: "Rest API"
    link: "(getBaseUrl)/flextype/documentation/rest-api/"
on_this_page:
  0:
    title: "Rest API's"
    link: "rest-apis"
  1:
    title: "Authentication"
    link: "authentication"
  2:
    title: "HTTP details"
    link: "http-details"
  3:
    title: "Errors"
    link: "errors"
---

## <a name="rest-apis"></a> Rest API's

Flextype provides APIs organized around <b>Re</b>presentational <b>S</b>tate <b>T</b>ransfer (REST) to manage the data. The API has predictable resource-oriented URLs, relies on standard HTTP status codes, and uses JSON for input and output.

#### Entries

For more details <a href="(getBaseUrl)/flextype/documentation/rest-api/entries">read the reference guide for the Entries API</a>.

#### Tokens

For more details <a href="(getBaseUrl)/flextype/documentation/rest-api/tokens">read the reference guide for the Tokens API</a>.

#### Cache

For more details <a href="(getBaseUrl)/flextype/documentation/rest-api/cache">read the reference guide for the Cache API</a>.

#### Registry

For more details <a href="(getBaseUrl)/flextype/documentation/rest-api/registry">read the reference guide for the Registry API</a>.

### <a name="authentication"></a> Authentication

To retrieve or store content with Flextype, you first need to authenticate your app with an token. Flextype offers three APIs, and each requires separate authentication.

We recommend using different access tokens for different environments in your development process. For example, use one for your production environment and another for staging or continuous integration. This allows you to revoke them individually in the future and manage your delivery channels independently.

You should send the authentication token `token` to an API as a query parameter for `GET` requests and for all `POST`, `PUT`, `PATCH`, `DELETE` requests you should send the access authentication token `access_token` to an API inside request body.

#### Create a new token

Go to your console and run the following command:

```text
bin/flextype tokens:create
```

This will create a new token and a hashed access token.

### <a name="http-details"></a> HTTP details

#### Cross-origin resource sharing

[CORS (Cross-origin resource sharing)](https://en.wikipedia.org/wiki/Cross-origin_resource_sharing) allows JavaScript web apps to make HTTP requests to other domains. This is important for third party web apps using Flextype, as without CORS, a JavaScript app hosted on example.com couldn't access our APIs because they're hosted on another.com which is a different domain.

CORS is [supported by all modern browsers](https://caniuse.com/cors). Read more about using CORS in this [tutorial](https://www.html5rocks.com/tutorials/cors/).

#### JSON format details

Flextype represents resources as [JSON](https://json.org/), encoded in UTF-8. Flextype represents dates and times as [Unix Timestamp](https://www.unixtimestamp.com).

### <a name="errors"></a> Errors

When something goes wrong with an API request, our server generates an error. The error message contains an appropriate HTTP status code in the header and a JSON response in the body.

#### Error types

<table>
    <thead>
        <tr>
            <th>HTTP status code</th>
            <th>Title</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>400</td>
            <td>Bad Request</td>
            <td>Validation for this particular item failed</td>
        </tr>
        <tr>
            <td>401</td>
            <td>Unauthorized</td>
            <td>Token is wrong</td>
        </tr>
        <tr>
            <td>404</td>
            <td>Not Found</td>
            <td>The requested resource or endpoint could not be found</td>
        </tr>
    </tbody>
</table>