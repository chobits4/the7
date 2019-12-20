- run command in bash
```bash
    docker run -itd -p "80:80" -v /Users/lusun/Documents/wordpress/app:/app -v /Users/lusun/Documents/wordpress/mysql:/var/lib/mysql --restart=always  chobits4/the7-wordpress
```
- the7 of home
> open link "http://localhost" from browser 
- the7 of admin
> open link "http://localhost/wp-admin" from browser
> `user`: admin
> `password`: Admin888
- you can manager mysql with `phpmyadmin`
> open link "http://localhost/wp-admin" from browser
> `user`: admin
> `password`: admin
