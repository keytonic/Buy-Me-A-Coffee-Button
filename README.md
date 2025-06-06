# Buy Me A Coffee Button

I wanted to make the Buy Me a Coffee button more customizable and allow for dynamic control.

- Drop the folder "buymeacoffee.svg" on your webserver and link to it like its an image.

- Append these key-value pair parameters to the URL to customize the button to your preferences:

    - **backgroundcolor**
        - Specifies the color of the button using hex color codes.
        - Omit the hash tag, defaults to #808080, grey, if not specified.
    - **color**
        - Specifies the color of the text and cup outline.
        - Omit the hash tag, defaults to #000000, black, if not specified.
    - **coffee**
        - Specifies the color of the fluid in the cup.
        - Omit the hash tag, defaults to #a52a2a, brown, if not specified.
    - **border**
        - Specifies the color of the border using "stroke".
        - Omit the hash tag, defaults to #000000, black, if not specified.
    - **borderwidth**
        - Specifies the border width using "stroke-width".
        - Defaults to 0, no border if not specified.
- Examples:

``` https://www.example.com/buymeacoffee.svg?backgroundcolor=808080&coffee=FFFFFF&color=ffa500&border=ffa500&borderwidth=2 ```

You can add transparency by using 8-digit hex codes (e.g., #FFFFFF00 or #00000075).

<img width="200px" src="https://keytonic.net/projects/buymeacoffee.svg?backgroundcolor=FF0000&coffee=FFA500&color=000000&border=000000&borderwidth=2"><br>
<img width="200px" src="https://keytonic.net/projects/buymeacoffee.svg?backgroundcolor=FFA500&coffee=FF0000&color=808080&border=808080&borderwidth=2"><br>
<img width="200px" src="https://keytonic.net/projects/buymeacoffee.svg?backgroundcolor=FFFF00&coffee=00FF00&color=ffffff&border=ffffff&borderwidth=2"><br>
<img width="200px" src="https://keytonic.net/projects/buymeacoffee.svg?backgroundcolor=00FF00&coffee=FFFF00&color=a020f0&border=a020f0&borderwidth=2"><br>
<img width="200px" src="https://keytonic.net/projects/buymeacoffee.svg?backgroundcolor=0000FF&coffee=A020F0&color=ff00ff&border=ff00ff&borderwidth=2"><br>
<img width="200px" src="https://keytonic.net/projects/buymeacoffee.svg?backgroundcolor=A020F0&coffee=0000FF&color=00ff00&border=00ff00&borderwidth=2"><br>
<img width="200px" src="https://keytonic.net/projects/buymeacoffee.svg?backgroundcolor=FFFFFF&coffee=808080&color=ffff00&border=ffff00&borderwidth=2"><br>
<img width="200px" src="https://keytonic.net/projects/buymeacoffee.svg?backgroundcolor=808080&coffee=FFFFFF&color=ffa500&border=ffa500&borderwidth=2"><br>
<img width="200px" src="https://keytonic.net/projects/buymeacoffee.svg?backgroundcolor=000000&coffee=a52a2a&color=ff0000&border=ff0000&borderwidth=2"><br>


