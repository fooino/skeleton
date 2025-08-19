<h1>
Skeleton kit for laravel package development
</h1>
<h3>
foo is your owner name(account name)
</br>
bar is your repository name
</br>
your package address will be foo/bar
</h3>

<h4>1- composer.json</h4>
<ol>
<li>Replace All fooino with foo</li>
<li>Relpace All Fooino with Foo</li>
<li>Replace All skeleton with bar</li>
<li>Replace All Skelton with Bar</li>
<li>The default license type is proprietary. If you change it to MIT, change the content of LICENSE.md as well</li>
<li>Change the authors</li>
<li>I added a private package(fooino/core) to the require section. If you do not have any dependancy, remove the require and repositories sections</li>
<li>For <a href="https://laravelpackage.com/02-development-environment/" target="_blank">laravel package development</a> you will need the orchestra/testbench package</li>
</ol>

<h3>Your composer json will be:</h3>

```json
{
    "name": "foo/bar",
    "description": "The foo bar package with tools and functionalities.",
    "type": "library",
    "license": "proprietary",
    "authors": [
        {
            "name": "Your Name",
            "email": "yourname@mail.com",
            "role": "owner"
        }
    ],
    "require-dev": {
        "orchestra/testbench": "^10.4"
    },
    "autoload": {
        "psr-4": {
            "Foo\\Bar\\": "src/",
            "Foo\\Bar\\Database\\": "database/",
            "Foo\\Bar\\Database\\Factories\\": "database/factories/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Foo\\Bar\\Tests\\": "tests/"
        }
    },
    "extra": {
        "laravel": {
            "providers": [
                "Foo\\Bar\\Providers\\BarServiceProvider"
            ]
        }
    }
}
```

<h4>2- LICENSE.md</h4>
<ol>
<li>Remove or Replace my name(Sajad Sholi)</li>
<li>Remove or Replace my website(fooino.com)</li>
<li>Remove or Replace my mail(sajadsholi@outlook.com)</li>
<li>If you prefer the <a href="https://choosealicense.com/licenses/mit/" target="_blank">MIT</a> license use below content</li>
</ol>

```text
MIT License

Copyright (c) [year] [fullname]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

```


<h4>3- src/Providers/SkeletonServiceProvider.php</h4>
<ol>
<li>Rename the file to BarServiceProvider.php</li>
<li>Replace All fooino with foo</li>
<li>Relpace All Fooino with Foo</li>
<li>Replace All skeleton with bar</li>
<li>Replace All Skelton with Bar</li>
<li>Remove the methods that you do not need</li>
<li>Modify the methods base on your requirements</li>
<li>Learn more about methods at <a href="https://laravelpackage.com" target="_blank">laravelpackage.com</a></li>
</ol>

<h4>3- tests/TestCase.php , tests/Unit/ExampleUnitTest.php , tests/Feature/ExampleFeatureTest.php</h4>
<ol>
<li>Relpace All Fooino with Foo</li>
<li>Replace All Skelton with Bar</li>
</ol>

<h4>4- README.md</h4>
<ol>
<li>Change or Remove the README.md file base on your desire</li>
</ol>

<hr/>


### 🚀 Test The files with `vendor/bin/phpunit` command the result must be <span style="background-color:green;">OK (2 tests, 2 assertions)</span></h3>