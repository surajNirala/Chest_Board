<?php 

UPDATE emp SET gender = (case when gender = 'male' then 'suraj' when gender = 'female' then 'nirala' end) WHERE id in (1,2)

?>
