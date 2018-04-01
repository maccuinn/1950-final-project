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
            <h1>Lesson 2</h1>
            <section class="lesson-section agenda">
                <h2>Agenda</h2>
                <ul>
                    <li>Charsets</li>
                    <li>HTML, XHTML, HTML5</li>
                    <li>Semantics</li>
                    <li>Forms, SVG, Multimedia</li>
                    <li>To Do</li>
                </ul>
            </section>
            <section class="lesson-section character">
                <h2>Character Sets And Languages</h2>
                <p>The W3C recommends the <a href="https://www.w3.org/International/questions/qa-choosing-encodings" target="_blank">UTF-8 charset</a> for web development. It includes an impressive array of languages and special characters, and is well supported in common devices.</p>
                <h3>Assign Character Set</h3>
                <p>If it is not specified, a web browser will choose the character set it thinks is most appropriate, but it is a better practice for the developer to ensure the correct character set by applying the <strong>meta</strong> tag to the <strong>head</strong> section of every HTML page:<br/>
                <strong>&lt;meta charset="utf-8" /></strong></p>
                <ul>
                    <li>Write all your text-based code (<strong>.html</strong>, <strong>.css</strong>, <strong>.js</strong>, <strong>.php</strong>, etc) in UTF-8. At development time, ensure your text editor is saving files in this format. This setting is usually found in the application's Preferences menu option.</li>
                    <li>Unless your audience includes very old browsers, you can <a href="https://tools.oratory.com/altcodes.html" target="_blank">code special characters</a> directly into the HTML (you don’t need to use HTML entities for most special characters).</li>
                    <li>You cannot copy-paste rich text (such as Microsoft Word, or WordPad) into your HTML. The rich text formatting may result in an unreadable mess.</li>
                    <li>An HTTP server can over-ride your charset preferences when it generates the HTTP header. Details on how to control this will be discussed later in this course.</li>
                </ul>
                <h3>HTML lang Attribute</h3>
                <p>Use the <strong>lang=""</strong> attribute to <a href="https://www.w3.org/International/questions/qa-html-language-declarations" target="_blank">declare the language in HTML</a>. This is usually applied to the <strong>html</strong> element. Assigning the appropriate language code will apply to all contained content, unless over-ridden with another <strong>lang=""</strong>.</p>
                <p>Use the language abbreviations from the <a href="http://www.loc.gov/standards/iso639-2/php/code_list.php" target="_blank">standard ISO 639-1</a> code set (don't use ISO 639-2).</p>
            </section>
            <section class="lesson-section html">
                <h2>HTML</h2>
                <p>What started as a language defined by <a href="http://www.w3.org/MarkUp/SGML/" target="_blank">SGML</a> (<em>Standard Generalized Markup Language</em>), HTML is used to mark up billions of pages, making up the bulk of the web.</p>
                <ul>
                    <li>Late 1991, Tim Berners-Lee releases the first iteration of what would become HTML 2.0 (there was no real 1.0+)</li>
                    <li>HTML was a language created at the dawn of the Web, using SGML (Standard Generalized Markup Language) as a template</li>
                    <li>Over the next decade, various additions, improvements and changes are introduced</li>
                    <li><a href="https://www.w3.org/TR/1999/REC-html401-19991224/" target="_blank">HTML 4.01</a> released in December 1999</li>
                    <li>Initially used for documents and a place for the technically inclined, the web did not have the international pervasiveness it does today</li>
                    <li>Most developers were new to the language and there were no real classes in it</li>
                    <li>People had to learn as they went along</li>
                    <li>A lot of early sites are poorly designed</li>
                </ul>
                <h3>HTML 4.01 template</h3>
                <p>The problem with the state of HTML then was its reputation as a loose language. Poorly structured code would be rendered differently across user agents, leading to forked code and less predictable results.</p>
            </section>
            <section class="lesson-section xhtml">
                <h2>XHTML</h2>
                <p>The <a href="https://www.w3.org/TR/2002/REC-xhtml1-20020801/" target="_blank">XHTML specification</a> was the result of rewriting <a href="https://www.w3.org/TR/1999/REC-html401-19991224/" target="_blank">HTML 4.01</a> using the ruleset derived from <a href="https://www.w3.org/XML/" target="_blank">XML</a></p>
                <ul>
                    <li>HTML 4.01 + XML = XHTML 1.0</li>
                    <li>X = eXtensible</li>
                    <li>X = XML related</li>
                    <li>Better, more predictable coding patterns.</li>
                    <li>Verifiable or "well-formed" code can be produced.</li>
                    <li>Forces a higher standard of HTML.</li>
                    <li>Predictable behavior across user agents.</li>
                    <li>Porting to HTML5 is easy (if you also observe <strong>semantic</strong> guidelines).</li>
                </ul>
                <h3>XHTML Rules:</h3>
                <ul>
                    <li>All elements must be properly nested
                        <ul>
                            <li>This is not valid: <strong>&lt;p>&lt;b>Bolded Text&lt;/p>&lt;/b></strong></li>
                            <li>This can be a problem with things like Lists &lt;ol> and &lt;ul>.</li>
                            <li>Especially when closing the List Item &lt;li> tag that contains the &lt;ul> or &lt;ol> tag.</li>
                        </ul>
                    </li>
                    <li>All tags must close
                        <ul>
                            <li>Example: <strong>&lt;p>Some text here&lt;/p></strong></li>
                            <li>Empty Elements are closed as well: <strong>&lt;br /></strong> or <strong>&lt;img src="#" /></strong></li>
                            <li>An extra space is required before the slash to work with all browsers.</li>
                        </ul>
                    </li>
                    <li>All tag names must be in lower case
                        <ul>
                            <li><strong>&lt;Img Src="some_image.gif"></strong> is not valid</li>
                        </ul>
                    </li>
                    <li>Attribute names are always in lower case
                        <ul>
                            <li><strong>&lt;p ALIGN="center"></strong> should be <strong>&lt;p align="center"></strong></li>
                        </ul>
                    </li>
                    <li>All attributes must be quoted
                        <ul>
                            <li><strong>&lt;body bgcolor=black></strong> will not work, you need: <strong>&lt;body bgcolor="black"></strong></li>
                        </ul>
                    </li>
                    <li>Attributes cannot be minimized
                        <ul>
                            <li><strong>&lt;input type="checkbox" checked></strong> cannot be used. The valid code is: <strong>&lt;input type="checkbox" checked="checked" /></strong></li>
                        </ul>
                    </li>
                    <li>Name Attribute is no longer used (except with forms). Replace "name" with "id".
                        <ul>
                            <li><strong>&lt;img src="picture.gif" name="myimage" /></strong> will not validate. Use <strong>id="myimage"</strong> instead.</li>
                        </ul>
                    </li>
                    <li>Mandatory Elements: Every XHTML document <strong>must have</strong> these elements:
                        <ul>
                            <li><strong>&lt;html></strong></li>
                            <li><strong>&lt;head></strong></li>
                            <li><strong>&lt;title></strong></li>
                            <li><strong>&lt;body></strong></li>
                            <li>The <strong>&lt;!DOCTYPE></strong> declaration <em>must</em> be there, but it is <em>part</em> of the document itself rather than an element of the document.</li>
                        </ul>
                    </li>
                    <li>Documents must be well-formed
                        <ul>
                            <li>The document must conform to all of the above rules</li>
                        </ul>
                    </li>
                    <li>Optional XML declaration
                        <ul>
                            <li>Not <em>required</em>, but good practice:</li>
                            <li><strong>&lt;?xml version="1.0" encoding="ISO-8859-1"?></strong></li>
                        </ul>
                    </li>
                    <li>Optional Element: An XHTML document should also declare the type and character encoding in the head section to ensure the server sends the correct content-type header:<br/><strong>&lt;meta http-equiv="Content-Type" content="text/html" charset="UTF-8"></strong></li>
                </ul>
                <h3>XHTML 1.0 template</h3>
            </section>
            <section class="lesson-section html5">
                <h2>HTML5</h2>
                <p>As of October 28, 2014, <a href="http://www.w3.org/TR/html5/" target="_blank">HTML5 is the official W3C recommendation</a></p>
                <p>HTML5 is more evolutionary then revolutionary. The bulk of previous HTML elements and attributes are maintained, with a few deprecations, and several additions.</p>
                <p>Significant features include:</p>
                <ul>
                    <li>Ultra simple Doctype: <strong>&lt;!DOCTYPE html></strong></li>
                    <li>Specifies how browsers should behave with imperfect code</li>
                    <li>Ability to embed <a href="https://www.w3.org/XML/" target="_blank">XML</a>, <a href="http://www.w3.org/Math/" target="_blank">MathML</a> or <a href="http://www.w3.org/Graphics/SVG/" target="_blank">SVG</a> markup.</li>
                    <li>Standardized Javascript API increases client-side script compatibility across browsers</li>
                    <li>Backwards compatible - older versions of HTML can effectively be updated by simply changing the doctype to HTML5</li>
                    <li>Guiding principles: Enhance semantic coding, Support existing content, Pave the cowpaths</li>
                </ul>
                <h3>HTML 5 template</h3>
                <h3>Paving the Cowpaths</h3>
                <p>Common developer practices have been simplified</p>
                <ul>
                    <li>Finally a DOCTYPE we can all remember:<br/><strong>&lt;!DOCTYPE html></strong></li>
                    <li>Declaring the character encoding is easier:<br/><strong>&lt;meta charset="utf-8"></strong></li>
                    <li>When linking to external stylesheets the <strong>type</strong> attribute is not required:<br/><strong>&lt;link rel="stylesheet" href="style.css" /></strong></li>
                    <li>When embedding CSS, the <strong>type</strong> attribute is not required:<br/><strong>&lt;style>&lt;/style></strong></li>
                    <li>Including javascripts is simplified as well (<strong>type</strong> attribute is not required)<br/><strong>&lt;script src="javascripts.js">&lt;/script></strong></li>
                </ul>
                <h3>HTML5: Enhanced Semantic Coding</h3>
                <p>It is crucial for all HTML content to be <a href="https://en.wikipedia.org/wiki/Semantic_HTML" target="_blank">semantically marked up</a>. This is how browsers, search engines, and screen readers make sense of online content.</p>
                <p>HTML5 provides more than just adjustments to the markup, there are new, powerfully semantic elements:</p>
                <ul>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section" target="_blank">&lt;section></a> is a tag representing a document or application section. in general, if you are planning to use a heading, start a new <strong>section</strong>. A <strong>section</strong> must contain a heading, and may contain <strong>article</strong> (s), possibly <strong>aside</strong>s or even sub-<strong>section</strong>s</li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article" target="_blank">&lt;article></a> is an independent piece of content in a document (it could stand alone if removed from the page). an <strong>article</strong> might be a blog post, forum thread, news story, collection of product information, etc</li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside" target="_blank">&lt;aside></a> is for content "only slightly" related to the main page content. <strong>aside</strong>s fill the role of a sidebar. if the content could be removed without reducing the meaning of the main content of the HTML document, then use an <strong>aside</strong></li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header" target="_blank">&lt;header></a> and <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer" target="_blank">&lt;footer></a> are for the header or footer of a page</li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav" target="_blank">&lt;nav></a> represents an area for navigation</li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main" target="_blank">&lt;main></a> used for containing content that is focused on the central topic of the page. this content is usually unique to the page, and not shared by other pages (main will usually NOT contain navigations, footers, sidebars, etc)</li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure" target="_blank">&lt;figure></a> will likely contain an <strong>img</strong> or graphic. self-contained content (could usually be removed from the page and stand on its own). allows for captioning of embedded content like an image graphic or video. if you want to associate a caption, add a <strong>figcaption</strong> child</li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption" target="_blank">&lt;figcaption></a> used as first or last child of <strong>figure</strong> to define the caption or legend for a figure</li>
                </ul>
                <p>These represent some big changes in HTML, allowing for more flexibility in coding and specifying content. Many of these will replace and reduce the need for many <strong>div</strong> tags. eg: instead of the typical <strong>&lt;div id="header"></strong>, use <strong>&lt;header></strong>.</p>
                <p>Having trouble deciding which tag to use for what content? Try this <a href="http://html5doctor.com/downloads/h5d-sectioning-flowchart.pdf" target="_blank">HTML5 flowchart</a>.</p>
                <h3>HTML5 Semantic Alterations</h3>
                <p></p>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <h3></h3>
                <p></p>
                <h4></h4>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <h3></h3>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
            </section>
            <section class="lesson-section forms">
                <h2>Agenda</h2>
               
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