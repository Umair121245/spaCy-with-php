<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$resumeText = "
1. Over 8 years of professional exposure in JavaScript technology such as React JS, Angular JS, D3 JS, Backbone JS, MongoDB, Express.js and Node JS.
2. 4+ years of strong experience in building ecommerce application using the JavaScript MEAN Stack and MERN Stack using Redux, Flux, Common.JS, Babel+ES6, EXT JS and Web - Pack for Single Page Application development.
3. Expertise in developing web pages using HTML5, CSS3, MVC, SASS, LESS, Object Oriented Java script, ES6, JQuery, AJAX, JSON, XML. Good understanding of Document Object Model (DOM) and DOM Functions.
4. Extensive use of Node environment using NPM, Grunt, Gulp, Maven, Bower and Mongo DB along with Mongoose.JS to create server side applications and wrote MapReduce program to sort the words in a file.
5. Expertise in creating the user validation forms and using the RESTful services for sending the data to the server.
6. Expert in designing web applications and web contents utilizing various Search Engine Optimization (SEO) techniques.
7. Expert in HTML5/CSS3 development and have experience in Backbone.js, Require.js, Node.js, Angular JS, D3.JS, Ext.js, Rxjs, Responsive design.
8. Good experience in using components, Forms, Events, Keys, Router, Animations and Flux concept.
9. Used Angular modules like Angular-animate, Angular-Cookies, Angular-Filter, Angular-Mocks, Angular - Resource, Angular-Route, Angular-Sanitize, Angular-Touch and Angular-Ul-Bootstrap.
10. Used Node Package Manager (NPM) to manage the modules and used it to install useful tools such as Grunt, Gulp, Groovy, Express, underscore.js, require.js, crypto.js, passport.js, mongoose, mongo.js, body-parser, bcrypt.js and socket.io.
11. Good experience on working with CSS Background, padding, table, Animations, Pseudo classes and Layouts, positioning, border, margin, Pseudo elements and CSS behaviors including the Box model.
12. Created visual design of graphic elements like forms, logos, icons and also creating interactive presentations Photoshop, Marvel, Wireframes, intro animations, technical illustrations.
Good knowledge on AWS cloud formation templates and configured SQS service through java API to send and receive the information.
13. Hands-on experience in using Message broker RabbitMQ.
14. Good knowledge of MVC and Flux architectural pattern and its implementation in user interfaces.
15. Solid working experience in various IDE's: Notepad++, Sublime Text, Komodo IDE, Eclipse, visual studio.
16. Worked on writing grunt, gulp, groovy tasks for build scripts, minified and bundled the JavaScript code.
17. Working knowledge on Jasmine, Karma, Protractor, Chai, Mocha, Junit, Mockito and JavaScript unit testing framework and Module bundler Rollup, Webpack.
18. Strong experience with the version controls GIT, GITHUB, Bit Bucket, SVN and Package manager NPM, Bower.
19. Good Understanding of RDBMS through Database Design, writing queries and stored procedures using databases like Oracle, MySQL and SQL Server.
20. Extensive experience in designing and developing enterprise applications for J2EE platform using MVC, JAVA, JDBC/ODBC, JSP, Servlet, Struts, EJB, Hibernate, Java Mail, JNDI, Apache Ant.";
$command = "python script.py " . escapeshellarg($resumeText);
$output = shell_exec($command);
echo "<pre>";
print_r($output);
