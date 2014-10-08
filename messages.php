<a id="messages"></a>
<h2 class="h2 nm title sectionHeader">Messages</h2>
    <div class="row">
        <div class="column g-12">
            <h3 class="h4 title">Simple Block Messages</h3>
            <div class="demoPanel">
                Warning message <code>msg_warning</code>:
                <div class="msg msg_warning">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.
                </div>

                Info message <code>msg_info</code>:
                <div class="msg msg_info">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.
                </div>

                Success message <code>msg_success</code>:
                <div class="msg msg_success">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.
                </div>

                Error message <code>msg_error</code>:
                <div class="msg msg_error">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.
                </div>
            </div>


            <h3 class="h4 title">Block Messages with Icon</h3>
            <div class="demoPanel">
                <div class="msg msg_warning msg_big pf">
                    <div class="pf_fix"></div>
                    <div class="pf_fluid">
                        <p class="msg_title">Lorem ipsum dolor sit amet</p>
                        <p class="msg_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.</p>
                    </div>
                </div>

                <div class="msg msg_info msg_big pf">
                    <div class="pf_fix"></div>
                    <div class="pf_fluid">
                        <p class="msg_title">Lorem ipsum dolor sit amet</p>
                        <p class="msg_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.</p>
                    </div>
                </div>

                <div class="msg msg_success msg_big pf">
                    <div class="pf_fix"></div>
                    <div class="pf_fluid">
                        <p class="msg_title">Lorem ipsum dolor sit amet</p>
                        <p class="msg_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.</p>
                    </div>
                </div>

                <div class="msg msg_error msg_big pf">
                    <div class="pf_fix"></div>
                    <div class="pf_fluid">
                        <p class="msg_title">Lorem ipsum dolor sit amet</p>
                        <p class="msg_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.</p>
                    </div>
                </div>
            </div>

            <h3 class="h4 title">Block Messages with Javascript</h3>
            <p>It is possible to show messages with a javascript function <code>showMsg()</code></p>
            <div class="demoPanel nm">
                <div class="row nm">
                    <div class="g-4 column">
                        <p><a class="bt db bt_sub" href="#" id="showMsgWarning">Show Warning Message</a></p>
                        <script type="text/javascript">
                            $(function(){
                                $('#showMsgWarning').click(function(e){
                                    e.preventDefault();
                                    $('#notificationPanel').showMsg("big", "warning", 0, "Lorem ipsum", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.");
                                })
                            });
                        </script>

                        <p><a class="bt db" href="#" id="showMsgInfo">Show Info Message</a></p>
                        <script type="text/javascript">
                            $(function(){
                                $('#showMsgInfo').click(function(e){
                                    e.preventDefault();
                                    $('#notificationPanel').showMsg("big", "info", 0, "Lorem ipsum", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.");
                                })
                            });
                        </script>

                        <p><a class="bt db bt_success" href="#" id="showMsgSuccess">Show Success Message</a></p>
                        <script type="text/javascript">
                            $(function(){
                                $('#showMsgSuccess').click(function(e){
                                    e.preventDefault();
                                    $('#notificationPanel').showMsg("big", "success", 0, "Lorem ipsum", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.");
                                })
                            });
                        </script>

                        <p><a class="bt db bt_danger" href="#" id="showMsgError">Show Error Message</a></p>
                        <script type="text/javascript">
                            $(function(){
                                $('#showMsgError').click(function(e){
                                    e.preventDefault();
                                    $('#notificationPanel').showMsg("big", "error", 0, "Lorem ipsum", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar fringilla risus.");
                                })
                            });
                        </script>
                    </div>
                    <div class="column g-8">
                        <strong class="db">Notification Area:</strong>
                        <p>Click on the left side buttons to show the selected message panel</p>
                        <div id="notificationPanel"></div>
                    </div>
                </div>
            </div>
            <pre>$(wrapper Selector).showMsg(
    size: big|small,
    type: warning|error|success|info,
    scroll to panel: 0|1,
    title: "Lorem ipsum",
    description: "Lorem ipsum dolor sit amet, consectetur..."
);
            </pre>


            <h3 class="h4 title">Dialogs</h3>

            <p class="todo">TODO: Dialogs</p>
        </div>
    </div>
