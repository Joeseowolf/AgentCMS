<?php

$pageTitle="Agent Panel Login";
require_once("dbconnection.php");

include('header.php');
?>
    <div class="uk-container">
    <div class="uk-grid-small uk-width-1-3 uk-position-center" uk-grid>
        <div>
        <h3 class="uk-heading-bullet uk-text-muted uk-text-center">Agent Panel Login</h3>
        <div class="uk-card uk-card-default uk-card-body">

            <form class="uk-form-stacked" name="login_form" id="login_form" method="post" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="hidden" name="token" value="<?php echo $token; ?>" />
                 <div class="uk-margin-small">
                    <div class="uk-form-controls">
                        <div class="uk-inline">
                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input" type="text" placeholder="username" name="username" id="username" required autofocus uk-tooltip="Please fill in your username" runat="server">
                            </div>
                        </div>
                 </div>
                 <div class="uk-margin-small">
                    <div class="uk-form-controls">
                        <div class="uk-inline">
                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <input class="uk-input" type="password" placeholder="password" id="user_password" name="user_password" required uk-tooltip="Please fill in your password" runat="server">
                            </div>
                        </div>
                 </div>

                 <button class="uk-button uk-button-default" type="submit" runat="server">Login</button>

                 <p class="uk-text=small uk-alert-danger uk-margin-top" uk-alert><?php echo $invalid;?><?php echo $logfirst;?></p>
                 <div class="uk-margin-top">
                    <p class="uk-text-small uk-text-muted uk-text-right uk-margin-remove-bottom">Beta v.1.0</p>
                 </div>
            </form>

        </div>
        </div>
    </div>


    <div class="uk-card uk-card-small uk-card-default uk-position-bottom-left uk-position-small  uk-padding-small">
        <div class="uk-container">
            <h4 class="uk-heading-bullet uk-text-muted"><span uk-icon="server"></span> Server Status</h4>
            <p class="uk-text-small"><span uk-icon="database"></span> Database: <span class="uk-alert-success uk-text-small" uk-alert><?php echo $contrue;?></span><span class="uk-alert-success uk-text-small" uk-alert><?php echo $confail;?></span></p>
        </div>
    </div>
    </div>




<?php include('footer.php');?>
