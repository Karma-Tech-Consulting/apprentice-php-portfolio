# apprentice-php-portfolio

## First PHP & Github activity.

 > Now that you've done a commit to your own branch you've used git before and you are configured in [our repository](https://github.com/Karma-Tech-Consulting/apprentice-php-portfolio) and are able to commit on your own branch there, we're ready to do a real project. After that commit you made, I merged your branch into the "master" branch on our github repository, and did some other work, like adding this ASSIGNMENT readme. You need to update your named branch because now the master branch is ahead of your named branch (work has been submitted to the remote repository after you submitted work to it. you need to retrieve it and update your branch) ... I added a screenshot to help with getting the changes updated from github
 
 # Your Assignment:
 
* Merge the "master" branch to your own named branch.

![screenshot](https://raw.githubusercontent.com/Karma-Tech-Consulting/apprentice-php-portfolio/justin/gitmergemaster.JPG "Do these steps")

1. On lines 14 and 15 of [portfolio.php](https://github.com/Karma-Tech-Consulting/apprentice-php-portfolio/blob/master/portfolio.php), look at how the first Title is echo'd. 
2. In the loop below, modify it so that:
 * The title at each inex $i is echo'd before the image.
 * Surround the `<img>` tag by a `<a></a>` tags - set the href set to the link property [at each index $i]. If you recall from code academy HTML those are the instructions for creating a clickable image-link, it shows the image and when the image is clicked it takes you to the link and not the image.. For the href, remember to echo a quotation mark in order to have valid html (see the img src attribute - that backslash inside an echo is called escaping a character).

* **Figure out php include other php files**
 * goooogle
 * Refactor portfolio.php to use the $links array from links.php - without copying and pasting the data from links.php into portfolio.php
 * Test it in your browser, it should be the same format of generated html, but with real images and titles and links.
* Commit changes often along the way (specifically at any point that it is 'working'), and when you are done, push your branch with new commits (completing the assignment) to the remote repository to share. `git push origin yourname`
