


	<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.2/themes/ui-lightness/jquery-ui.css" type="text/css" />

<style>
#timeout {
    display: none;
}
</style>
    <script type="text/javascript">
        // Set timeout variables.
        var timoutWarning = 60000; // Display warning in 1Mins.
        var timoutNow = 120000; // Timeout in 2 mins.
        var logoutUrl = 'logout_time_out.php'; // URL to logout page.

        var warningTimer;
        var timeoutTimer;

        // Start timers.
        function StartTimers() {
            warningTimer = setTimeout("IdleWarning()", timoutWarning);
            timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
        }

        // Reset timers.
        function ResetTimers() {
            clearTimeout(warningTimer);
            clearTimeout(timeoutTimer);
            StartTimers();
            $("#timeout").dialog('close');
        }

        // Show idle timeout warning dialog.
        function IdleWarning() {
            $("#timeout").dialog({
                modal: true
            });
        }

        // Logout the user.
        function IdleTimeout() {
            window.location = logoutUrl;
        }
    </script>
</head>
<body onload="StartTimers();" onmousemove="ResetTimers();">
    <form id="form1" runat="server">
    <div id="timeout">
        <h1>
            Session About To Timeout</h1>
        <p>
            You will be automatically logged out in 1 minute.<br />
        To remain logged in move your mouse over this window.
    </div>
    <table id="table1" align="center" border="1" width="800" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                Hello World
            </td>
        </tr>
    </table>
    </form>
</body>
