<a id="forms"></a>
<h2 class="h2 nm title sectionHeader">Forms</h2>
    <h3 class="title h3 nm">Inputs</h3>
    <div class="todo">Grupo de paneles con Dia, mes y año</div>
    <div class="row">
        <div class="column g-6">

            <div class="fg">
                <label for="inputName">Default Text Input</label>
                <input type="text" class="text" placeholder="Placeholder" />
                <small>To use autofocus property just add "autofocus" to input tag</small>
            </div>
            <div class="fg">
                <label for="inputName">Disabled Input</label>
                <input type="text" class="text" placeholder="Placeholder" disabled="disabled"/>
            </div>
            <div class="fg">
                <label for="inputName">Default combo</label>
                <select name="" id="">
                    <option value="">-- select an option --</option>
                    <option value="">option 1</option>
                    <option value="">option 2</option>
                    <option value="">option 3</option>
                </select>
            </div>
            <div class="fg error">
                <label for="inputName">Error Input</label>
                <input type="text" class="text" placeholder="Placeholder"/>
                <small>with autofocus property</small>
            </div>
            <div class="fg">
                <label for="inputName">Upload File input</label>
                <input type="file" class="text" placeholder="Placeholder" />
            </div>

            <div class="fg">
                <label for="inputName">Custom File input</label>
                <div class="customFileInput inputWithButton inputWithButton_150">
                    <div class="inputWrap fileName">
                    </div>
                    <div class="btWrap">
                        <a href="#" class="bt">Select File...</a>
                    </div>
                    <input type="file" class="text" placeholder="Placeholder" />
                </div>
            </div>

            <div class="fg">
                <label for="inputName">Upload File input</label>
                <textarea name="" id="" placeholder="Textarea placeholder"></textarea>
            </div>
        </div>
        <div class="column g-6">
            <div class="fg">
                <label for="inputName">Password field</label>
                <input type="password" class="text" placeholder="Placeholder" />
                <small>default note</small>
            </div>
            <div class="fg">
                <label for="inputName">URL field</label>
                <input type="url" class="text" placeholder="http://" />
                <small>It must start with a valid URI scheme, (http://, ftp:// or mailto:)</small>
            </div>
            <div class="fg">
                <label for="inputName">Phone field</label>
                <input type="tel" class="text" placeholder="Phone number" />
                <small>It does not enforce a particular syntax</small>
            </div>
            <div class="fg">
                <label for="inputName">E-mail field</label>
                <input type="email" class="text" placeholder="enter a valid e-mail" />
                <small>By default it will only take one, but if the multiple attribute is provided, a comma separated list of email addresses is valid.</small>
            </div>
            <div class="fg">
                <label for="inputName">Search field</label>
                <input type="search" class="text" placeholder="Your search" />
                <small>A text input field styled in a way that is consistent with the platform's search field</small>
            </div>
            <div class="demoPanel">
                <p>Other possible input types are: <code>number</code>, <code>color</code>, <code>range</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>time</code>, <code>week</code>, <code>month</code>. more <a href="http://www.html5rocks.com/en/tutorials/forms/html5forms/" target="_blank">info here</a> </p>
            </div>
        </div>
        <div class="column g-12 first">
            <h3 class="title h3">Checkboxs & Radio buttons</h3>
            <div class="row">
                <div class="column g-6">
                    <div class="fg checkboxGroup">
                        <label for="test_C_4">Checkbox with label on the left side</label>
                        <input type="checkbox" id="test_C_4" class="checkbox">
                    </div>
                    <div class="fg checkboxGroup">
                        <input type="checkbox" id="test_C_5" class="checkbox">
                        <label for="test_C_5">Checkbox with label on the right side</label>
                    </div>
                    <div class="fg checkboxGroup">
                        <label>Checkbox Group</label>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" id="test_C_1" class="checkbox">
                                <label for="test_C_1">option 1</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" id="test_C_2" class="checkbox">
                                <label for="test_C_2">option 2</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" id="test_C_3" class="checkbox">
                                <label for="test_C_3">option 3</label>
                            </div>
                        </div>
                    </div>
                    <div class="codePanel">
                        <pre>&lt;div class="fg checkboxGroup"&gt;
  &lt;label>Checkbox Group&lt;/label&gt;
  &lt;div class="options"&gt;
    &lt;div class="option"&gt;
      &lt;input type="checkbox" id="name" class="checkbox"&gt;
      &lt;label for="name">option 1&lt;/label&gt;
    &lt;/div>
    &lt;div class="option"&gt;
      &lt;input type="checkbox" id="name" class="checkbox"&gt;
      &lt;label for="name">option 2&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
                    </div>
                </div>
                <div class="column g-6">
                    <div class="fg radioGroup">
                        <label>Radio Group</label>
                        <div class="options">
                            <div class="option">
                                <input type="radio" value="valor del input" name="name" id="test_1" class="radio">
                                <label for="test_1">option 1</label>
                            </div>
                            <div class="option">
                                <input type="radio" value="valor del input" name="name" id="test_2" class="radio">
                                <label for="test_2">option 2</label>
                            </div>
                            <div class="option">
                                <input type="radio" value="valor del input" name="name" id="test_3" class="radio">
                                <label for="test_3">option 3</label>
                            </div>
                        </div>
                    </div>
                    <div class="fh">
                        <div class="fg radioGroup">
                            <label>Inline Radio Group</label>
                            <div class="options">
                                <div class="option">
                                    <input type="radio" value="valor del input" name="inlineName" id="test_E_1" class="radio">
                                    <label for="test_E_1">op.1</label>
                                </div>
                                <div class="option">
                                    <input type="radio" value="valor del input" name="inlineName" id="test_E_2" class="radio">
                                    <label for="test_E_2">op.2</label>
                                </div>
                                <div class="option">
                                    <input type="radio" value="valor del input" name="inlineName" id="test_E_3" class="radio">
                                    <label for="test_E_3">op.3</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="codePanel cb">
                    <pre>&lt;div class="fg radioGroup"&gt;
  &lt;label>Radio Group&lt;/label&gt;
  &lt;div class="options"&gt;
    &lt;div class="option"&gt;
      &lt;input type="radio" id="name" class="radio"&gt;
      &lt;label for="name">option 1&lt;/label&gt;
    &lt;/div>
    &lt;div class="option"&gt;
      &lt;input type="radio" id="name" class="radio"&gt;
      &lt;label for="name">option 2&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="column g-12 first fh">
            <h3 class="title h3">Horizontal Fields</h3>
            <p>It is possible to display field groups inline. To do it you only need to wrap your fields in a panel with class <code>fh</code></p>
            <div class="fg">
                <label for="inputName">Horizontal label</label>
                <input type="text" class="text"/>
            </div>
            <div class="fg">
                <label for="inputName">Last label</label>
                <select name="" id="">
                    <option value="">-- select an option --</option>
                    <option value="">option 1</option>
                    <option value="">option 2</option>
                    <option value="">option 3</option>
                </select>
            </div>
            <div class="fg checkboxGroup">
                <label>Inline checkboxs</label>
                <div class="options">
                    <div class="option">
                        <input type="checkbox" id="test_D_1" class="checkbox">
                        <label for="test_D_1">opt 1</label>
                    </div>
                    <div class="option">
                        <input type="checkbox" id="test_D_2" class="checkbox">
                        <label for="test_D_2">opt 2</label>
                    </div>
                    <div class="option">
                        <input type="checkbox" id="test_D_3" class="checkbox">
                        <label for="test_D_3">opt 3</label>
                    </div>
                </div>
            </div>
        </div>
    </div>



