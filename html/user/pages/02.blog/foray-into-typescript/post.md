---
title: 'First Foray Into TypeScript'
date: '04/26/2016 05:03 pm'
published: true
taxonomy:
    tag:
        - javascript
        - 'learn to code'
        - typescript
    category:
        - blog
---

I've been playing around with TypeScript for the last week or so and thought I might share my first impressions.

#### tl;dr version:

Likes:
* Strong typing
* Huge amounts of available open source typings
* Ease of starting

Dislikes:
* The compiler itself
* Getting it to play nicely with a build system.

Somewhat unsure:
* The compiler will error, but still compile into working code.

### The actual post!

#### Quick intro to TypeScript

Some quick background for newcomers: [TypeScript](typescriptlang.org) is a superset of JavaScript that provides strong typing. Strong typing just means you specify the data type of variables, function returns, etc. For example
```
// javascript
var name = "Ryan";
var age = 24;
function introduce( name, age ) {
	return `Hi, my name is ${ name } and I am ${ age } years old!`
}
introduce( name, age ) // Hi, my name is Ryan and I am 24 years old!
```

Now if I want to reassign name or age JavaScript doesn't mind, because it is weakly typed.

```
name = 99;
age = "Twenty-four";

introduce( name, age ) // Hi, my name is 99 and I am Twenty-four years old!
```

This has pro's and con's. It allows for more flexibility because you can store whatever you like in any variable. But it can also cause problems when a variable changes type and you aren't expecting it to. Let's look at how we would write the above code in TypeScript:

```
var name: string = "Ryan";
var age: number = 24;

function introduce( name: string, age: number ): string {
	return `Hi, my name is ${ name } and I am ${ age } years old!`
}
```

This looks very similar, all we have done is add type annotations to the variables, parameters, and function return value. Now we have built ourself a little safety, if name somehow gets changed to a number, TypeScript will throw an error warning us.


### The good

#### Strong Typing
This was my first real look at developing in a strongly typed environment and I **really** liked it. The safety of knowing exactly what data type you will be getting from a variable or function adds a lot of clarity to the code. The time spent writing out a few extra characters per line was easily made up for in catching errors before they even occured. It also helped me find problems that hadn't even occured yet.

An example would be the first thing I attempted in TypeScript, a simple recreation of a toy problem from the previous day.

```
/*
As a crude form of hashing function, Lars wants to sum the digits of a number. 
Then he wants to sum the digits of the result, and repeat until he have only one digit left.
*/

function digitSum( num ): number {
  let sum: number = num.toString().split('').reduce( ( a: string, b: string ): number => parseInt( a ) + parseInt( b ), 0);

  return sum < 10 ? sum : digitSum( sum );
}

digitSum( 31337 ) // 8
digitSum( 1073741824 ) // 1
```

The TypeScript compiler threw an error on the above code, correctly pointing out that because the return value of `reduce` is a number, `a` also needs to be a number.

```
function digitSum( num ): number {
  let sum: number = num.toString().split('').reduce( ( a: number, b: string ): number => a + parseInt( b ), 0);

  return sum < 10 ? sum : digitSum( sum );
}
```

This not only let me drop the `parseInt` but it pointed out a potential problem in my code that may have hurt me down the line.

#### Open Source Typings

This was something I was worried about coming into learning. For TypeScript to work well with outside libraries those libraries need to be strongly typed as well. With the amount of libraries, frameworks, and plugins I use day to day, it seemed improbable that they would all be available.

So far they have been. I've been using the [Typings](https://github.com/typings/typings) package manager to find and install all of the necessary typings. I haven't done an exhaustive search by any means, but the vast majority of popular libraries appear covered. Amazing work by the TypeScript open source community on this.

#### Ease of Starting

Because TypeScript is a superset of JavaScript, you don't **have** to strongly type everything. It doesn't mind if you have some untyped variables laying around. While that won't be best practice, it certainly makes getting started easier. On top of that, the compiler is initially configured to target all `.ts` files making it super easy to simply type `tsc` and have everything compile.

### The Bad

#### The Compiler

While I really liked writing TypeScript, I did not enjoy trying to make the compiler do what I wanted it to. It felt to me like the compiler was trying to perform the role of a full build system/module bundler... but without support for anything that wasn't TypeScript.

I feel like it would have been much better off designed as a Babel plugin. As it is now, getting TypeScript to play nice and do what I want with Webpack has been an enormous pain in the neck.

On top of that, why in the name of all that is holy does the `tsconfig.json` not accept file globs by default? As it is currently you can either add an `exclude` property of files to ignore, or a `files` property that has to list every individual file. I see absolutely no ryhme or reason behind not supporting file globs.

### The Confusing

I am really on the baffled with this one, there's good and bad to it, but I am leaning towards the bad.

If the TypeScript compiler runs into a typing error such as:
```
function returnString(): string {
	return 1;
}
```

The compiler will throw an error in the terminal, but still compile the file into working code. I suppose this could be nice because typing errors can be common when working with outside libraries, but I really think the bad outweighs the good. The fact that the compiler found an error where my code was doing something explicitly wrong and **still works** opens up some nasty possibilities.

If you don't have your eye on the terminal when the compiler runs, these errors could be missed very easily, letting you build on bad code.


### Summing Up

I'll keep this short due to my tl;dr at the top.

I really like TypeScript as a language, it provides some very useful tools to developers and feels well designed all around. However the compiler feels like an attempt was made to re-invent the wheel and ending up with an octagon... It works, but not as well as it should.

Keep in mind these are only first impressions after an early dive into the language. I'll be happy to revise my opinion if/when I come across new information. If you have any suggestions I would love to hear them.