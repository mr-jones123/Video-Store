[![ReadMeSupportPalestine](https://raw.githubusercontent.com/Safouene1/support-palestine-banner/master/banner-support.svg)](https://www.pcrf.net/information-you-should-know/how-to-help-palestine.html#:~:text=By%20purchasing%20goods%20and%20services,specialize%20in%20Middle%20Eastern%20products.)


# Xy's Video Store📹

![CSS](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

The Xy's Video-Store project is a web-based application developed in PHP, designed to manage and facilitate the rental process of videos. It provides features such as browsing available videos, renting videos, and managing user accounts.

# Getting Started
This project uses a lot of dependencies, all of which can be installed using Composer. To contribute to this project, you must install various dependencies. Optionally, you can configure the GitHub workflow to control your semantic versioning.
### Installation of PHP Dependencies

To get started, install `composer` in through [this website](https://getcomposer.org/download/).

Next, install `phpMailer` with the following command:
```
composer require phpmailer/phpmailer
```
This library will enable you to modify the email function of our project. You need to have an **email, an app password, and a SMTP Server to test it out**. To make an app password, [follow the instructions here provided by Google](https://support.google.com/mail/answer/185833?hl=en). Make sure to store these in your [`env`](#environment-variables) file.    

Speaking of environemnt variables, you have to install [phpdotenv](https://github.com/vlucas/phpdotenv.git) to test out your environment variables.
```
composer require vlucas/phpdotenv
```

### Environment Variables

In developing projects, keeping your credentials (like API Keys, Emails, and Passwords) secret is paramount. You need to have a `.env` in the [root directory of the `src` folder](./src/). in there, you can see the `.env.example` file which serves as what your variables should look like. 


### Deployment

The link is not yet ready in [`infinityFree`](https://dash.infinityfree.com/accounts), but it will be hosted soon. It has a waiting time of 72 hours.

### The Developers 
1. Xynil Jhed "mr.jones-123" Lacap - The Leader
2. Kiel Adrien Yap - Contributor
3. Nikka Nate - Contributor
4. Nikki Anderson Daluz - Contributor
5. Nin Ricci Garcia - Contributor
