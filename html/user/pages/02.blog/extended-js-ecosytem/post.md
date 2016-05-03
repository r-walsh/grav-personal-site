---
title: 'The Extending JavaScript Ecosystem'
date: '04/19/2016 06:54 pm'
taxonomy:
    tag:
        - javascript
        - native
        - react
        - react-native
        - node
    category:
        - blog
---

I recently decided to play around with React Native (blog post on that to come!) and it got me thinking about the JavaScript ecosystem. JavaScript is truly enormous, with a complete monopoly on the web. There are plugins, libraries, and frameworks for seemingly any situation; there is very little a determined developer **can't** do with JS.

In my mind, the biggest contributor to this growth is JavaScript's loose structure. That loose structure leads to flexibility, which in turn leads to extensibility that developers love to take advantage of. But the big two extensions I want to talk about are Node and React Native.

> For those of you new to the area:
> Node is a JavaScript engine that allows you to run JS outside of the browser. This has a huge amount of use cases, such as running build systems and setting up web servers.
> 
> React Native is a framework that allows you to build truly native mobile or desktop applications in JavaScript (versus shoehorning in a browser and making it seem like a native application).

The reason I want to focus on these two is because they are taking JavaScript out of its home in the browser and putting it to work elsewhere. This is incredibly important, a developer who only knows JavaScript can now develop for the client (whether that client is mobile, web, or desktop) and the server. Not only is this easier on the developer it can bring huge benefits to companies that can properly implement these technologies.

Consider two scenarios:

### A team is using React for their client side web application, Ruby on Rails as the server, Swift for iOS, and Java for Android.

This creates some problems, to list a few:

* This requires developers for each language, or more advanced developers comfortable in writing the required languages.
* Logic cannot be easily shared between platforms because of a language gap, breaking one of the commandments of coding (**NEVER REPEAT THYSELF**).
* Keeping all of the application updates in sync is a logistical mess. If the web team falls behind (you know how those web guys are...) the React application will seem significantly worse in comparison to the iOS and Android applications.

### A second team is using React for their client side web application, React Native for mobile applications, and Node as a server.

A well designed application using the above technologies works around all of the above issues.

> Regarding well designed... 
> A well designed application in this context would mean keeping only the code required for the view portion of the application unique to each of the client types. Any and all logic that isn't completely unique to the view would be pulled out into services available to the entire application.

A closer look:

* Because the team is using one language for all of their development, a company can hire fewer, more specialized developers.
* Logic is easily and automatically shared throughout the whole application. Both the mobile and web application are hitting the exact same function for data parsing. Changing that one function propagates throughout the entire application immediately.

There are caveats here! If your blood is already boiling and you are praying to the Java/Swift/Ruby gods to smite me down for my JavaScript hubris, just hurry to the next section!


### Caveats
I recognize that this article has been one sided so I want to make it clear that I am not trying to argue one way or another, I just want to talk about the benefits of using JavaScript on all platforms because I am excited about it.

#### Caveat One:
JavaScript is not the best hammer for every nail. It is more important to methodically determine the best solutions to the problems unique to whatever you are working on.

#### Caveat Two:
Tools like React Native are still in very early stages and come with their own pro's and con's. Just this past weekend I spent a significant portion of time trying to get React Native to play nice with my web application.

## Final Thought

JavaScript is expanding to all platforms, to me it seems likely that JavaScript will rapidly increase its foothold across those platforms, particularly mobile, over the next several years. This raises a question...

### Is JavaScript the best language to span across multiple platforms from a technical standpoint?

No. Or at least, probably not. There is no perfect language for every device, and JavaScript hasn't and will not become a perfect language for every device. But I don't think that matters at all, because the early bird gets the worm and JS up and waiting.