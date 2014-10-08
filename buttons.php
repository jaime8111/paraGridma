<a id="buttons"></a>
<h2 class="h2 nm title sectionHeader">Buttons</h2>
    <p>Adding the class <code>bt</code> to a link, submit button or button element make them look like buttons.</p>
    <div class="row">
        <div class="column g-12">
            <div class="demoPanel">
                <h4 class="h4 title">Links as buttons</h4>
                <pre>&lt;a class="bt" href="#"&gt;Button&lt;/a&gt;</pre>
                Small button: <code>bt_small</code><br />
                <a href="javascript:void(0)" class="bt bt_small">Small Link Button</a>
                <br />
                Default button: <br />
                <a href="javascript:void(0)" class="bt">Medium Link Button</a>
                <br />
                Large button: <code>bt_large</code><br />
                <a href="javascript:void(0)" class="bt bt_large">Large Link Button</a>
                <br />
                Block button: <code>db</code><br />
                <a href="javascript:void(0)" class="bt bt_large db">Full width button</a>

                Buttons that display full width on mobiles<br/>
                <a href="javascript:void(0)" class="bt bt_large block-on-mobile">Full width mobile</a>

                <p class="bt_group">
                    Secundary button: <code>bt_sub</code><br />
                    <a href="javascript:void(0)" class="bt bt_sub">Secundary Link Button</a>
                    <a href="javascript:void(0)" class="bt">Main Action Link Button</a>
                </p>
                <p class="bt_group">
                    Secundary button: <code>disabled</code><br />
                    <a href="javascript:void(0)" class="bt disabled">Disable Main Action Link Button</a>
                    <a href="javascript:void(0)" class="bt bt_sub disabled">Disable Secundary Link Button</a>
                </p>

                <p class="bt_group">
                    States of buttons: <code>bt_sub</code> <code>bt_success</code> <code>bt_danger</code><br />
                    <a href="javascript:void(0)" class="bt">Default</a>
                    <a href="javascript:void(0)" class="bt bt_sub">Subordinate</a>
                    <a href="javascript:void(0)" class="bt bt_success">Success</a>
                    <a href="javascript:void(0)" class="bt bt_danger">Danger</a>
                </p>



                <div class="row nm">
                    <div class="column g-6">
                        <h4 class="h4 title">&lt;button&gt; as buttons</h4>
                        <button class="bt bt_small">Small &lt;button&gt; Button</button>
                        <br />
                        <button class="bt">Medium &lt;button&gt; Button</button>
                        <br />
                        <button class="bt bt_large">Large &lt;button&gt; Button</button>
                        <br />
                        <button class="bt bt_sub">Other Action &lt;button&gt; Button</button>
                        <br />
                        <button class="bt disabled" disabled="disabled">Disable Main Action Button</button>


                        <p class="bt_group">
                            <button class="bt">Default</button>
                            <button class="bt bt_sub">Sub</button>
                            <button class="bt bt_success">Success</button>
                            <button class="bt bt_danger">Danger</button>
                        </p>
                    </div>
                    <div class="column g-6">
                        <h4 class="h4 title">Submit Inputs as buttons</h4>
                        <input type="submit" class="bt bt_small" value="Input Small Button">
                        <br />
                        <input type="submit" class="bt" value="Input Medium Button">
                        <br />
                        <input type="submit" class="bt bt_large" value="Input Large Button">
                        <br />
                        <input type="submit" class="bt bt_sub" value="Main Action Input Button">
                        <br />
                        <input type="submit" class="bt disabled" value="Disable Main Action Input Button" disabled="disabled">


                        <p class="bt_group">
                            <input type="submit" class="bt" value="Default">
                            <input type="submit" class="bt bt_sub" value="Sub">
                            <input type="submit" class="bt bt_success" value="Success">
                            <input type="submit" class="bt bt_danger" value="Danger">
                        </p>
                    </div>
                </div>




                <h4 class="h4 title">Buttons with icons</h4>
                <p class="bt_group">
                    <a href="javascript:void(0)" class="bt bt_small bt_icon fa fa-info">Button small with icon</a>
                    <a href="javascript:void(0)" class="bt bt_small bt_icon bt_icon_right fa fa-group">Button small with right icon</a>
                </p>
                <p class="bt_group">
                    <a href="javascript:void(0)" class="bt bt_icon fa fa-camera-retro fa fa-gears">Button medium with icon</a>
                    <a href="javascript:void(0)" class="bt bt_icon bt_icon_right fa fa-heart">Button medium with right icon</a>
                </p>
                <p class="bt_group">
                    <a href="javascript:void(0)" class="bt bt_large bt_icon fa fa-check">Button large with icon</a>
                    <a href="javascript:void(0)" class="bt bt_large bt_icon bt_icon_right fa fa-envelope">Button large with right icon</a>
                </p>

                <h4 class="h4 title">Input with button</h4>
                <p>With this component it is possible to put a button next to a text field.
                <strong>The button has a fixed with, and the text field is responsive</strong> to fill its parent width.
                In the example we used a button with a width of 150 pixels, but you can expand the css to adapt it to you button desired width</p>
                <div class="inputWithButton inputWithButton_150">
                    <div class="inputWrap">
                        <input type="text" value="" name="" placeholder="Placeholder">
                    </div>
                    <div class="btWrap">
                        <a href="" class="bt">Fixed Button</a>
                    </div>
                </div>
                <div class="inputWithButton inputWithButton_150 break-on-mobile">
                    <div class="inputWrap">
                        <input type="text" value="" name="" placeholder="Placeholder">
                    </div>
                    <div class="btWrap">
                        <a href="" class="bt">Fixed Button</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
