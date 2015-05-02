<?php

class usuario extends Eloquent{
    protected $table ='usuario';

public function misPublicaciones(){
    return Publicacion::where('usuario_id', $this->id)
            ->orderBy('id','desc')
                    ->get();
}
}