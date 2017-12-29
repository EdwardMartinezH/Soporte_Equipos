<?php
      
        /*
         * Elimina... requiere un idPerifericos
         */
                   $perifericos=new Perifericos();
            $id=filter_input(INPUT_POST,'idPerifericos');
            $perifericos->setIdPerifericos($id);
            //dao.eliminar

