<?php

require_once "./application/utils/error_defines.php";

class ReportController extends CI_Controller {

    public function searchError($user_id = false) {

        $msg = "erro de busca ";
        if ($user_id) {
            $msg.= "com o usuario $user_id.";
        }

        if ($this->make_log_file(ERROR_SEARCH, $msg)) {
            // Mensagem para ser recuperada no front end
            echo "Seu erro foi reportado com sucesso! Estamos trabalhando nisso. Obrigado :)";
            return true;
        }

        echo "Não pudemos processar o seu erro no momento, mas trabalharemos nisso em breve!";
        return true;
    }

    /**
     * @method make_log_file() Make a log file with the $error_type constant and $msg string
     * @param $error_type Constant of error
     * @param $msg Message of error
     * @return boolean File exists
     */
    private function make_log_file($error_type, $msg) {

        $file_name = $this->manage_error($error_type);

        return file_exists(LOG_FILES_PATH . $file_name . FILE_LOG_EXTENSION);
    }

    private function manage_error($type) {

        $file_name = "";
        switch ($type) {
            case 1:
                $file_name = "reported-login-error";
            break;
            case 2:
                $file_name = "reported-register-error";
            break;
            case 3:
                $file_name = "reported-search-error";
            break;
            default:
                $file_name = "reported-errors";
        }
        // $file_name.= FILE_LOG_EXTENSION;

        return $file_name;
    }
}