<!DOCTYPE html>
<html lang="en">
    <?php 
        include 'templates/head.php';
    ?>
<body>
    <div class="wrapper">
   
    <main>
    <div class="banner-content">
        <?php
            include 'templates/header.php';
        ?>
    </div>
    <div class="two-column">
    <?php
        include 'templates/subnav.php';
    ?>
        <div class="lesson-content">
            <h1>Lesson 3</h1>
            <section class="lesson-section agenda">
                <h2>Agenda</h2>
                <ul>
                    <li>Referencing Stylesheets</li>
                    <li>Importing</li>
                    <li>Fonts</li>
                    <li>Compact CSS</li>
                    <li>Advanced Selectors</li>
                    <li>Rule Specificity</li>
                    <li>To Do</li>
                </ul>
            </section>
            <section class="lesson-section ref-css">
                <h2>Referencing CSS</h2>
                <p>When linking to external style sheets, there are a number of features to be aware of:</p>
                <ul>
                    <li>Each stylesheet requires its own <strong>link</strong> tag</li>
                    <li>Multiple stylesheets can be loaded (main.css, fonts.css, layout.css, etc)</li>
                    <li><strong>rel</strong> determines how the HTML will use the file linked to (<em>REQUIRED</em>)</li>
                    <li><strong>href</strong> defines the path, relative or absolute, to the css file (<em>REQUIRED</em>)</li>
                    <li><strong>type</strong> attribute has been deprecated (dropped in HTML5)</li>
                    <li><strong>title</strong> attribute allows the user to group stylesheets</li>
                    <li><strong>media</strong> attribute allows you to specify what medium this should be viewed in.</li>
                </ul>
                <p><strong>&lt;link<span class=”tabbed”>rel="stylesheet"</span><br />
                    <span class=”tabbed”>href="http://www.mysite.com/css/styles.css"</span><br />
                    <span class=”tabbed”>type="text/css"</span><br />
                    <span class=”tabbed”>title="Main Style"</span><br />
                    <span class=”tabbed”>media="screen" /></span></strong></p>
                <h3>Media variations: media attribute</h3>
                <ul>
                    <li><strong>media="type"</strong> can be a powerful tool</li>
                    <li>Examples of media types:
                        <ul>
                            <li><strong>all</strong> - well supported, commonly used (<em>DEFAULT</em>)</li>
                            <li><strong>aural</strong></li>
                            <li><strong>braille</strong></li>
                            <li><strong>embossed</strong></li>
                            <li><strong>handheld</strong> - not common (smart phones identify as <strong>screen</strong>)</li>
                            <li><strong>print</strong> - well supported, commonly used</li>
                            <li><strong>projection</strong></li>
                            <li><strong>screen</strong> - well supported, commonly used</li>
                            <li><strong>tty</strong></li>
                            <li><strong>tv</strong></li>
                        </ul>
                    </li>
                    <li>Note that most smart phone devices (iPhones, Android, etc) do not identify themselves as media type <strong>handheld</strong>. The reasoning was that the devices were more than capable of displaying standard web sites, so they identify as <strong>screen</strong>.</li>
                </ul>
                <h3>Alternate style sheets: rel attribute</h3>
                <p>You can also have alternate stylesheets supported</p>
                <ul>
                    <li><strong>rel="stylesheet"</strong> defines the default stylesheets to use</li>
                    <li><strong>rel="alternate stylesheet"</strong> allows different styles to be defined</li>
                    <li><strong>Tip: </strong> If you have multiple sheets that belong to one "look" make sure they all have the same <strong>title</strong></li>
                    <li>You can create alternate style sheets for users, allowing them to select which ones they would like to see</li>
                    <li>An example would be to create a 'Larger Text' style sheet with everything in a larger font, or providing an option for users to choose an austere, simple page instead of a colorful/image heavy stylesheet</li>
                    <li>Many browsers are now giving users the ability to select which sheet they would like to see. (Firefox: View > Page Style)</li>
                </ul>
                <h3>Alternate style sheets: title attribute</h3>
                <ul>
                    <li>A stylesheet is "persistent" if it is linked with <strong>rel="stylesheet"</strong> and has no <strong>title</strong> attribute. All persistent stylesheets are always used when rendering</li>
                    <li>A stylesheet is "preferred" if it is linked with <strong>rel="stylesheet"</strong> and has a <strong>title</strong> attribute. these styles will be used as the default. preferred stylesheets with the same title are grouped together</li>
                    <li>Finally, a stylesheet is "alternate" if it is linked with <strong>rel="alternate stylesheet"</strong> and has a <strong>title</strong>. These stylesheets are supposed to allow the user to choose stylesheets, they are grouped together by <strong>title</strong> and show up in the browser's stylesheet selector if it has one (<strong>View > Page Style</strong> in Firefox). Each group (by <strong>title</strong>) is mutually exclusive.</li>
                </ul>
                <h3>Persistent Styles</h3>
                <p>Persistent styles apply in all cases, even when alternate styles are chosen.</p>
                <p><strong>&lt;!-- rel="stylesheet" with NO title="" --><br />
                &lt;link<span class=”tabbed”>rel="stylesheet"</span><br />
                <span class=”tabbed”>href="css/persistent_styles.css" /></span></strong></p>
                <h3>Preferred Styles</h3>
                <p>Preferred styles will be the default, but will be replaced if alternate styles are chosen.</p>
                <p><strong>&lt;!-- rel="stylesheet" AND a title="" --><br />
                &lt;link<span class=”tabbed”>rel="stylesheet"</span><br />
                    <span class=”tabbed”>href="css/default_styles.css"</span><br />
                    <span class=”tabbed”>title="Standard Styling" /></span></strong></p>
                <h3>Alternate Styles</h3>
                <p>Alternate styles will not be applied by default, but may be chosen by the user agent. Each alternate stylesheet must have a <strong>title=""</strong>.</p>
                <p><strong>&lt;!-- use rel="alternate stylesheet" for alternative stylesheets... --><br />
                &lt;link<span class=”tabbed”>rel="alternate stylesheet"</span><br />
                    <span class=”tabbed”>href="css/large_text.css"</span><br />
                    <span class=”tabbed”>title="Large Text Styles" /></span></strong></p>
                <h3>Grouping Stylesheets</h3>
                <p>If more than one link tag shares the same <strong>title=""</strong> then they will be grouped together.</p>
                <p><strong>&lt;-- group stylesheets with shared title="" --><br />
                &lt;link<span class=”tabbed”>rel="alternate stylesheet"</span><br />
                    <span class=”tabbed”>href="css/monchrome_layout.css"</span><br /><span class=”tabbed”>title="Monochrome Styles"	/></span><br />
                &lt;link<span class=”tabbed”>rel="alternate stylesheet"</span><br />
                    <span class=”tabbed”>href="css/monchrome_fonts.css"</span><br />
                    <span class=”tabbed”>title="Monochrome Styles" /></span></strong></p>
                <p>To enable alternate stylesheet switching, you can either apply some javascript to manage the switch with hyperlinks, or use <a href="https://support.mozilla.org/en-US/questions/841578" target="_blank">Firefox for alternate stylesheets</a>.</p>
            </section>
            <section class="lesson-section import">
                <h2>@import: Managing Multiple CSS Files</h2>
                <p>You can use the <strong>@import</strong> method to import multiple stylesheets from a basic stylesheet that you link to. This will reduce the clutter that can sometimes occur within the <strong>&lt;head></strong> section.</p>
                <p>It is also a great place to be able to manage your CSS. From your main document, create a <strong>&lt;link></strong> to your <strong>styles.css</strong> page.</p>
                <p>In the body of the <strong>styles.css</strong> file, import as many files as you need:</p>
                <ul>
                    <li><strong>@import url("css/type.css");</strong></li>
                    <li><strong>@import url("css/nav.css");</strong></li>
                    <li><strong>@import url("css/template.css");</strong></li>
                </ul>
                <p><strong>NOTE: </strong> when using the <strong>@import</strong> directive in an external CSS file, ensure it comes before your CSS selector rules. It might be best to not include any CSS rules in a page that uses <strong>@import</strong>.</p>
            </section>
            <section class="lesson-section charset">
                <h2>@charset: Assigning CSS Character Set</h2>
                <p>If your CSS files only contain standard keyboard characters, assigning the character set is not required. The CSS language itself does not use any exotic characters, so assigning a charset is often omitted. If, however, your CSS needs to use special characters, ensuring the correct character set can be very important. Eg: When using a pseudoclass to add content to HTML <strong>content: "Awesome!"</strong></p>
                <p>If needed, add the <strong>@charset</strong> rule to the top of the CSS document.</p>
                <p><strong>/* assign charset at top of .css file */<br />
                @charset "utf-8";</strong></p>
                <p><strong>/* CSS rules follow... */</strong></p>
            </section>
            <section class="lesson-section fontface">
                <h2>@font-face And Font Servers</h2>
                <p>Fonts that aren't available on the client machine can be provided by a third-party font server or by your website's server.</p>
                <ul>
                    <li><a href="https://fonts.google.com/" target="_blank">Google Fonts</a></li>
                    <li><a href="https://typekit.com/" target="_blank">Adobe Typekit</a></li>
                    <li><a href="https://www.fontsquirrel.com/" target="_blank">•	Font Squirrel</a></li>
                    <li>Plenty more available online...</li>
                </ul>
                <h3>Third Party Font Server</h3>
                <p>Browse the font server site, select the fonts you like and they will provide you with code for a <strong>&lt;link /></strong> tag to add to your HTML. You can then use the font in your CSS.</p>
                <p><strong>&lt;!-- add the link tag to the HTML --><br />
                &lt;link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" /></strong></p>
                <p><strong>/* use the font in the CSS */<br />
                selector{<br />
                    <span class=”tabbed”>font-family: 'Bungee', cursive;</span><br />
                }</strong></p>
                <p>No longer stuck with 'Arial', 'Helvetica', 'Georgia' and the rest.</p>
                <h3>Serve Fonts From Your Website</h3>
                <p>If the font(s) are copyright free, or if you have license to distribute a font, you can serve them yourself using the CSS <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face" target="_blank">@font-face</a> directive.</p>
                <p>Different client systems will need fonts in varying formats, so if you are distributing the font yourself, be sure to have the font available in most common formats.</p>
                <ul>
                    <li>Obtain the font(s) you wish to use. You must either have license to distribute the font or the font must be copyright free.</li>
                    <li>Upload your font(s) to a <a href="https://www.fontsquirrel.com/tools/webfont-generator" target="_blank">Font Generator</a> to obtain a font kit including various formats for the font(s).</li>
                    <li>Uncompress the font kit and locate it somewhere with your website files.</li>
                    <li>Use <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face" target="_blabk">@font-face</a> to load the fonts. The font-kit generated by Squirrel Font will include some same CSS to help you with the sometimes volumous coding.</li>
                    <li>Apply the new font in CSS.</li>
                </ul>
                <p><strong>/* load the font in CSS */<br />
                @font-face {<br />
                    <span class=”tabbed”>font-family: 'alex_brushregular';</span><br />
                    <span class=”tabbed”>src: url('/fonts/alexbrush-regular-webfont.woff2') format('woff2'),</span><br />
                    <span class=”tabbed”>url('/fonts/alexbrush-regular-webfont.woff') format('woff'),</span><br />
                    <span class=”tabbed”>url('/fonts/alexbrush-regular-webfont.ttf') format('tff');</span><br />
                }</strong></p>
                <p><strong>/* use the font in CSS */<br />
                selector{<br />
                    <span class=”tabbed”>font: bold 20px alex_brushregular ;</span><br />
                    <span class=”tabbed”>color:#555;</span><br />
                }</strong></p>
                <p>Don't get carried away with wild font choices. Some fonts have very poor readability, reducing accessibility.</p>
            </section>
            <section class="lesson-section css-measure">
                <h2>CSS Measurements</h2>
                <p>In CSS, there are a number of measurement values that can be used in declarations.</p>
                <h3>Size measurements</h3>
                <ul>
                    <li><strong>px</strong> - Pixels is one of the most common measuring types. It is specific to computers, as it renders based on the pixel-display of all monitors. Great for specific measurements on boxes and borders, but for fonts, it can lead to difficulty as some browsers don't allow scaling and font can end up too small.</li>
                    <li><strong>%</strong> - Percentage measurements are also very common.</li>
                    <li><strong>em</strong> - A relative measurement of the letter "m" in the chosen font. This is a popular one for spacing around text, as it inherits the font dimensions.</li>
                    <li><strong>rem</strong> - Similar to <strong>em</strong>, this will inherit only the Root value, helpful for avoiding 'compound inheritance' values.</li>
                    <li><strong>pt</strong> - Points is an old system related to type-setting that had a standard size for points. This is a relative size based on the users' system.</li>
                    <li><strong>pc</strong> - Picas is a very old system that was frequently related to typewritten documents. Rarely used.</li>
                    <li><strong>ex</strong> - Similar to <strong>em</strong>, this is a relative measurement of the letter "x". However, it is rarely used, and not fully supported.</li>
                    <li><strong>vh, vw, vmin, vmax</strong> - size relative to viewport widths and heights. very useful for scaling, though may not enjoy full support yet.</li>
                    <li><strong>named</strong> - This refers to fonts and a few other elements. The named sizes are xx-small, x-small, small, medium, large, x-large, xx-large. They are relative to the browsers base font size.</li>
                </ul>
                <h3>Color Measurement</h3>
                <p>Colors can be specified in a number of ways, corresponding to the system that your organization or visual element requires. Almost all color systems use a method for expressing a combination of the three-color spaces used for displaying colors on computer monitors: Red Green and Blue.</p>
                <ul>
                    <li><strong>Hex: #003366</strong> - One of the most common systems, it combines 2 digits each for Red Green and Blue. Each hex pair stand stands for digits between 00 and FF in hexadecimal.</li>
                    <li><strong>Compact Hex: #f30</strong> - This is almost identical to the Hex version, except that when three numbers are used, most browsers will just double-up each digit. So, <strong>#f30</strong> will become <strong>#ff3300</strong>.</li>
                    <li><strong>Named: cornflowerblue</strong> - Although the official W3C specification only lists 16 named colors, almost every browser supports the various <a href="http://www.google.ca/search?q=css+named+colors" target="_blank">named colors</a>.</li>
                    <li><strong>RGB: rgb(255, 0, 255) </strong> - This allows the user to specify the same thing as Hex, but in Decimal format.</li>
                    <li><strong>RGB %: rgb(100%, 0%, 50%)</strong> - Almost identical to RGB, but with percentages of each color space instead.</li>
                </ul>
            </section>
            <section class="lesson-section compact-css">
                <h2>Compact CSS Code</h2>
                <p>When building your CSS rules, there are some easy ways to compact your code, reducing code bloat and file size.</p>
                <h3>Grouping selectors</h3>
                <ul>
                        <li>If you would like to apply the same style to a multitude of different selectors, you can group them with the comma</li>
                        <li><strong>h1, h2, h3, h4, h5 { color: red; }</strong></li>
                        <li>This can be done with Elements, classes and IDs</li>
                        <li>Specific rules for H3 (for example) can come later</li>
                </ul>
                <h4>Grouping comes to Classes</h4>
                <ul>
                    <li>As well as grouping Elements, you can also group classes</li>
                    <li>Define several classes: <strong>.cool{ color:red; } .wicked { border:1px solid black; }</strong></li>
                    <li>Assign several classes at once: <strong>&lt;p class="cool wicked"></strong> will select both the <strong>cool</strong> and <strong>wicked</strong> classes</li>
                    <li>The order of the attribute values is irrelevant</li>
                    <li>Case is important! Remember to use a single rule for CSS naming and stick with it</li>
                </ul>
                <h3>Rule Compacting</h3>
                <p>There are a lot of rules that will accept a compacted ruleset:</p>
                <ul>
                        <li><a href="https://developer.mozilla.org/en/docs/Web/CSS/margin" target="_blank">margin</a>: top right bottom left;</li>
                        <li><a href="https://developer.mozilla.org/en/docs/Web/CSS/padding" target="_blank">padding</a>: top right bottom left;</li>
                        <li><a href="https://developer.mozilla.org/en/docs/Web/CSS/border" target="_blank">border</a>: width style color;</li>
                        <li><a href="https://developer.mozilla.org/en/docs/Web/CSS/font" target="_blank">font</a>: font-style font-variant font-weight font-size/line-height font-family;</li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/background" target="_blank">background</a>: color image position repeat size attachment;</li>
                </ul>
                <p>Box model properties support 1, 2, 3 and 4 values. For example:</p>
                <ul>
                    <li><strong>border-width:10px;</strong>
                        <ul>
                            <li>all four borders are 10px</li>
                        </ul>
                    </li>
                    <li><strong>border-width:10px 20px;</strong>
                        <ul>
                            <li>top and bottom borders are 10px</li>
                            <li>left and right borders are 20px</li>
                        </ul>
                    </li>
                    <li><strong>border-width:10px 20px 30px;</strong>
                        <ul>
                            <li>top border is 10px</li>
                            <li>left and right borders are 20px</li>
                            <li>bottom border is 30px</li>
                        </ul>
                    </li>
                    <li><strong>border-width:10px 20px 30px 40px;</strong>
                        <ul>
                            <li>top border is 10px</li>
                            <li>right border is 20px</li>
                            <li>bottom border is 30px</li>
                            <li>left border is 40px</li>
                        </ul>
                    </li>
                </ul>
                <p>Note you do not need to specify values for all fields in a compact rule. Just keep the space delimited list in the correct order. For example, you could specify several font values all at once:<br />
                <strong>font: italic small-caps bold 1.3em "helvetica", sans-serif;</strong></p>
                <p>or, specify only a select couple.<br />
                <strong>font: 1.3em "helvetica", sans-serif;</strong></p>
            </section>
            <section class="lesson-section css-selectors">
                <h2>CSS Selectors</h2>
                
            </section>
            <section class="lesson-section ref-css">
                <h2>Referencing CSS</h2>
                
            </section>

            <section class="lesson-section todo">
                <h2>To Do</h2>
                <ul>
                    <li>Download, review, and complete the homework assignment from <a href="https://learn.bcit.ca/" target="_blank">D2L</a></li>
                    <li>Find a partner for your homework.</li>
                    <li>Practice using <a href="http://bcitcomp.ca/1950/lecture/03/#advanced_selectors" target="_blank">advanced CSS selectors</a>.</li>
                </ul>
            </section>
        </div>       
    </div>
    </main>
    <?php
        include 'templates/footer.php';
    ?>
    </div>
    <?php 
        include 'templates/scripts.php';
    ?>
</body>
</html>