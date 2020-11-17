<?php

require_once "./application/utils/error_defines.php";

class ReportController extends CI_Controller {

    public function searchError($user_id = false) {

        // Aqui atualmente chega um POST
        // $_POST => ['user' => '$username', 'error', '$errorname']

        $log = [];
        $log['error_type'] = "search";
        $log['user'] = $user_id;

        $error_processado = $this->make_log_file(ERROR_SEARCH, $log);

        $error = [];
        $error['error_code'] = $error_processado;

        if (is_null($error_processado)) {

            // Mensagem para ser recuperada no front end
            $error['error_msg'] = "Não foi possível salvar a sua solicitação :( Trataremos isso em breve";

        } elseif ($error_processado) {
            
            // Mensagem para ser recuperada no front end
            $error['error_msg'] = "Seu erro foi reportado com sucesso! Estamos trabalhando nisso. Obrigado :)";            
        
        } else {

            // Mensagem para ser recuperada no front end
            $error['error_msg'] = "Não pudemos processar o seu erro no momento, mas trabalharemos nisso em breve!";
        }

        // Echo para recuperar o conteudo no front end com JS (http.responseText)
        echo json_encode($error);
        
        return true;
    }

    /**
     * @method make_log_file() Make a log file with the $error_type constant and $msg string
     * @param $error_type Constant of error
     * @param $msg Message of error
     * @return boolean File exists
     */
    private function make_log_file($error_type, $message_log) {

        $file_name = $this->manage_error($error_type);
        $file_path = LOG_FILES_PATH . $file_name . FILE_LOG_EXTENSION;

        $message_log = json_encode($message_log)."\n";

        try {

            if (!@file_put_contents($file_path, $message_log, FILE_APPEND)) {
                throw new Exception("Não foi possível salvar o log de erro.");
            }

        } catch (Exception $e) {

            return null;
        }

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