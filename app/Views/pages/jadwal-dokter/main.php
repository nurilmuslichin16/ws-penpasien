<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Jadwal Dokter</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $breadCrumb; ?></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="bs-docs-section">
                            <h2 id="glyphicons-glyphs">Pilih Poliklinik</h2>
                            <p>Silahkan pilih terlebih dahulu untuk menampilkan dokter berdasarkan poliklinik.</p>
                            <div class="bs-glyphicons">
                                <ul class="bs-glyphicons-list">
                                    <li onclick="goTo(1)">
                                        <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-plus</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-euro" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-euro</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-eur" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-eur</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-minus</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-cloud</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-envelope</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-pencil</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-glass</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-music" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-music</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-search</span>
                                    </li>

                                    <li>
                                        <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                        <span class="glyphicon-class">glyphicon glyphicon-heart</span>
                                    </li>
                                </ul>
                            </div>

                            <h2 id="glyphicons-how-to-use">How to use</h2>
                            <p>For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</p>
                            <div class="bs-callout bs-callout-danger" id="callout-glyphicons-dont-mix">
                                <h4>Don't mix with other components</h4>
                                <p>Icon classes cannot be directly combined with other components. They should not be used along with other classes on the same element. Instead, add a nested <code>&lt;span&gt;</code> and apply the icon classes to the <code>&lt;span&gt;</code>.</p>
                            </div>
                            <div class="bs-callout bs-callout-danger" id="callout-glyphicons-empty-only">
                                <h4>Only for use on empty elements</h4>
                                <p>Icon classes should only be used on elements that contain no text content and have no child elements.</p>
                            </div>
                            <div class="bs-callout bs-callout-info" id="callout-glyphicons-location">
                                <h4>Changing the icon font location</h4>
                                <p>Bootstrap assumes icon font files will be located in the <code>../fonts/</code> directory, relative to the compiled CSS files. Moving or renaming those font files means updating the CSS in one of three ways:</p>
                                <ul>
                                    <li>Change the <code>@icon-font-path</code> and/or <code>@icon-font-name</code> variables in the source Less files.</li>
                                    <li>Utilize the <a href="http://lesscss.org/usage/#command-line-usage-relative-urls">relative URLs option</a> provided by the Less compiler.</li>
                                    <li>Change the <code>url()</code> paths in the compiled CSS.</li>
                                </ul>
                                <p>Use whatever option best suits your specific development setup.</p>
                            </div>
                            <div class="bs-callout bs-callout-warning" id="callout-glyphicons-accessibility">
                                <h4>Accessible icons</h4>
                                <p>Modern versions of assistive technologies will announce CSS generated content, as well as specific Unicode characters. To avoid unintended and confusing output in screen readers (particularly when icons are used purely for decoration),
                                    we hide them with the <code>aria-hidden="true"</code> attribute.</p>
                                <p>If you're using an icon to convey meaning (rather than only as a decorative element), ensure that this meaning is also conveyed to assistive technologies – for instance, include additional content, visually hidden with the <code>.sr-only</code> class.</p>
                                <p>If you're creating controls with no other text (such as a <code>&lt;button&gt;</code> that only contains an icon), you should always provide alternative content to identify the purpose of the control, so that it will make sense to
                                    users of assistive technologies. In this case, you could add an <code>aria-label</code> attribute on the control itself.</p>
                            </div>
                            <div class="zero-clipboard"><span class="btn-clipboard">Copy</span>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-search"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
                            </div>


                            <h2 id="glyphicons-examples">Examples</h2>
                            <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>
                            <div class="bs-example" data-example-id="glyphicons-general">
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" aria-label="Center Align"><span class="glyphicon glyphicon-align-center" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" aria-label="Right Align"><span class="glyphicon glyphicon-align-right" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" aria-label="Justify"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="btn-toolbar" role="toolbar">
                                    <button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star</button>
                                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star</button>
                                    <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star</button>
                                    <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star</button>
                                </div>
                            </div>
                            <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">aria-label=</span><span class="s">"Left Align"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-align-left"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-star"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span> Star
<span class="nt">&lt;/button&gt;</span></code></pre>
                            </div>

                            <p>An icon used in an <a href="#alerts">alert</a> to convey that it's an error message, with additional <code>.sr-only</code> text to convey this hint to users of assistive technologies.</p>
                            <div class="bs-example" data-example-id="glyphicons-accessibility">
                                <div class="alert alert-danger" role="alert">
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <span class="sr-only">Error:</span> Enter a valid email address
                                </div>
                            </div>
                            <div class="zero-clipboard"><span class="btn-clipboard">Copy</span>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-exclamation-sign"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Error:<span class="nt">&lt;/span&gt;</span>
  Enter a valid email address
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<script>
    function goTo(id) {
        window.location = "/" + id
    }
</script>

<?= $this->endSection('content'); ?>