---
title: 'A (Not so) Quick Look at Toy Problems'
date: '04/15/2016 12:12 pm'
taxonomy:
    tag:
        - 'learn to code'
        - advice
        - 'toy problems'
    category:
        - blog
---

At DevMountain we have our students attempt a toy problem each morning before lecture or projects begin. These range from fairly basic logic of "Determine if a string is a palindrome" to the more in depth "Reconstruct the `new` operator".

Before jumping into some suggestions on how to think about toy problems, I want to give a handful of reasons as to why we feel they are important. If you don't care about that feel free to jump [ahead](#suggestions).

There are a handful of reasons we do this, the primary three being:
### Preparing students for whiteboarding or code challenges in interviews.

This one is fairly self explanatory. Developers new to the job market need to be able to look at a logical problem and make a solid attempt at solving it. For this reason we try to ramp up quickly to toy problems that are more difficult than most junior developers will experience in job interviews.

If a student can create an `Array.prototype.reduce` or `Array.prototype.nestedFilter` polyfill, then they shouldn't have any problem determining if a string is a palindrome or solving FizzBuzz.

### Introducing students to new concepts and methods they may not discover in their standard learning.

In a bootcamp atmosphere it is very easy for students to gloss over convienence methods or deeper language ideas. This isn't a CS degree, they are here to learn how to build things, but that doesn't make these features any less important to grasping.

Toy problems help us introduce the more important, but lesser used/required language features. A student who rebuilds `Array.prototype.reduce` is going to be far more likely to remember to use it than one who doesn't. And a student who recreates the `new` operator is going to have a firmer grasp of what is actually happening when creating a new instance of a class.

### Getting students accustomed to the "coder" way of thinking.

This is by far the most important reason in my mind. Simple, presentable websites can be made without really delving into deeper logic, but that deeper logic is critical to a student who wants to progress in his or her career. Without being able to think logically about a problem and find a good solution you will remain at the most basic levels of development.

<a name="suggestions"></a>

## Suggestions on solving!

First and foremost, like everything else in life, you will improve with time and practice. This post is just an attempt to ease the struggle a bit. With that out of the way, here's a handful of ideas that usually help me get rolling when I'm working on something tough:

### Just start writing

You don't have to solve it in one go and you don't have to solve every aspect of it at once! Let's say you are given the problem "Write a function that takes in an array of primitive values and arrays and flips every boolean in both the parent and nested arrays."

Well let's break it down into tiny pieces, we know based on the instructions that we will need to create a function that takes in an array parameter.

```javascript
function falsifyArrays( arr ) {

}
```

Easy enough, though it doesn't do much yet, so let's build on it. Instead of overthinking and trying to solve the whole thing at once, let's just get the top level working. For that we'll use...

### Pseudo-code

Pseudo-code can be extremely useful when working through complex problems. Just write out what you need to be doing without worrying about syntax. This will let you keep your thoughts in order and have a kind of "rough draft" of code.

```javascript
function falsifyArrays( arr ) {
	// Loop through arr
    // I'll need an if statement to check whether or not the value is true or false
    // I'll need to handle swapping true to false or vice versa
}
```

Now we have a roadmap towards some functionality. The logic is already there, now we just add syntax.

```javascript
function falsifyArrays( arr ) {
	// Loop through arr
    for ( var i = 0; i < arr.length; i++ ) {
    	// I'll need an if statement to check whether or not the value is true or false
        if ( arr[i] === true ) {
        	// I'll need to handle swapping true to false or vice versa
        	arr[i] = false;
        } else if ( arr[i] === false ) {
        	// I'll need to handle swapping true to false or vice versa
        	arr[i] = true;
        }
    }
    return arr;
}
```

Awesome! The first part of our functionality is complete. It can't handle those pesky nested arrays yet, but it is swapping our boolean values just as expected. This code is a little messy though, let's see if we can find a way to clean it up.

### Cleaning up code

This part isn't mandatory, but it will make your code easier to reason about which in turn will make solving the more complex portions of the problem easier. Let's browse through the code and see what we can do.

It looks like our `else if` is unnecessary here, let's just break that into a seperate `if` statement.

```javascript
function falsifyArrays( arr ) {
    for ( var i = 0; i < arr.length; i++ ) {
        if ( arr[i] === true ) {
        	arr[i] = false;
        }
        if ( arr[i] === false ) {
        	arr[i] = true;
        }
    }
    return arr;
}
```

That's a little better, but I think there's more we can do. What if we used the `typeof` operator?

```javascript
function falsifyArrays( arr ) {
    for ( var i = 0; i < arr.length; i++ ) {
        if ( typeof arr[i] === 'boolean' ) {
        	arr[i] = !arr[i];
        }
    }
    return arr;
}
```

That is much better! Now we just have one `if` statement that checks whether or not the current value is a boolean, then flips that value.

So how are we going to do the hard part of diving into those nested arrays? Let's get back to the pseudo-code.

```javascript
function falsifyArrays( arr ) {
    for ( var i = 0; i < arr.length; i++ ) {
        if ( typeof arr[i] === 'boolean' ) {
        	arr[i] = !arr[i];
        }
        // I need to check whether or not arr[i] is an array.
        // if it IS an array I need to loop through it again
    }
    return arr;
}
```

Ok, we've got our roadmap, let's try adding some syntax.

```javascript
function falsifyArrays( arr ) {
    for ( var i = 0; i < arr.length; i++ ) {
        if ( typeof arr[i] === 'boolean' ) {
        	arr[i] = !arr[i];
        }
		if ( Array.isArray( arr[i] ) {
        	for ( var j = 0; j < arr[i].length; j++ ) {
            	if ( typeof arr[i] === 'boolean' ) {
                    arr[i] = !arr[i];
                }
                // Uh oh... what if we get another array?!
            }
        }
    }
    return arr;
}
```

Well that got messy fast. We have a nested for loop, repeated logic, and we have the problem of yet **another** nested array hidden inside. We are going to solve this by...

### Thinking recursively!

Recursion is understandably scary to new coders. It's a concept that is a little tough to grasp at first, but once you do it becomes one of the most powerful tools available to you. I could write a full article on trying to explain and make recursion less scary (and I might someday) but for now let's just look at the basics.

Recursion in its simplest form is a function that calls itself.

```javascript
function recursion() {
	recursion();
}
recursion();
```

The code above is as simple as recursion gets, but it is also an infinite loop. When writing a recursive function the most important consideration is making sure it knows when to stop calling itself.

```javascript
var counter = 0;
function recursion() {
	if ( counter < 5 ) {
    	counter++;
        recursion();
    }
}
recursion();
```

The above code is no longer an infinite loop. Once `counter` hits 5, the code will stop running. Let's make something a little more applicable to our toy problem. A recursive function that simply logs every nested element in an array.

```javascript
function logger( arr ) {
	for ( var i = 0; i < arr.length; i++ ) {
    	if ( Array.isArray( arr[i] ) ) {
        	logger( arr[i] );
        } else {
        	console.log( arr[i] );
        }
    }
}
logger( [1, 2, [3, 4, [5, 6]]] );
```

What is our stopping point here? We don't have a counter anymore, why isn't this an infinite loop? In this case our stopping point is when we run out of nested arrays. It isn't as clear as a simple counter, but it is there.

So when should you consider recursion as a solution? For me, the biggest indicator is when you need to delve into an unknown level of nesting in objects or arrays. Anytime you are unsure how deep the data is nested recursion is frequently the correct solution. Let's try to apply this to our toy problem, here is where we left off:

```javascript
function falsifyArrays( arr ) {
    for ( var i = 0; i < arr.length; i++ ) {
        if ( typeof arr[i] === 'boolean' ) {
        	arr[i] = !arr[i];
        }
		if ( Array.isArray( arr[i] ) {
        	for ( var j = 0; j < arr[i].length; j++ ) {
            	if ( typeof arr[i] === 'boolean' ) {
                    arr[i] = !arr[i];
                }
                // Uh oh... what if we get another array?!
            }
        }
    }
    return arr;
}
```

We'll still need our outer `for` loop, but maybe we can use recursion to get around that ugly inner for loop. Let's try it out.

```javascript
function falsifyArrays( arr ) {
    for ( var i = 0; i < arr.length; i++ ) {
        if ( typeof arr[i] === 'boolean' ) {
        	arr[i] = !arr[i];
        }
		if ( Array.isArray( arr[i] ) ) {
        	falsifyArrays( arr[i] );
        }
    }
    return arr;
}
```

Fantastic! Now we aren't repeating logic. Let's walk through and try to understand the order in which things are happening. Let's say we're using the array `[1, false, false, [true, 'Hello', [true, true]]]` as our argument.

```
falsifyArrays runs on [1, false, false, [true, 'Hello', [true, true]]]. Comes to the first nested array and calls itself, passing in just that nested array. Now it waits for the scond call to finish.
-- falsifyArrays runs on [true, 'Hello', [true, true]]. Comes to the next nested array and repeats the steps from the second call and waits on the third call to finish.
----falsifyArrays runs on [true, true]. Runs through its array, finds no more arrays and passes it's value back to the second call, which then passes up to the first, which finally returns the array.
```

JavaScript is a "synchronous" language. Meaning every time `falsifyArrays` gets called, the instance of the function that called it has to wait for the next level to finish before it can continue.

### Summary

At some point I will most likely release a part two to this post, as I have more I'd like to cover but this has already gone on longer than expected. Hopefully this helps out readers who are struggling with toy problems. As always, if there's anything I can do to help increase clarity don't hesitate to reach out on [Twitter](https://twitter.com/_rtwalsh) or [LinkedIn](https://www.linkedin.com/in/ryan-walsh-175669a2).