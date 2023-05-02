<?php 
            return getDocListActive($doc)->where("deadline", "<", $today)
            ->selectRaw('*, datediff(documents.date_received,documents.deadline) as due')
            ->orderBy('due','desc');

?>