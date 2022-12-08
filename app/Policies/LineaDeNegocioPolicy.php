<?php

namespace App\Policies;

use App\Models\Linea_De_Negocio;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LineaDeNegocioPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Linea_De_Negocio  $lineaDeNegocio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Linea_De_Negocio $lineaDeNegocio)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Linea_De_Negocio  $lineaDeNegocio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Linea_De_Negocio $lineaDeNegocio)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Linea_De_Negocio  $lineaDeNegocio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Linea_De_Negocio $lineaDeNegocio)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Linea_De_Negocio  $lineaDeNegocio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Linea_De_Negocio $lineaDeNegocio)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Linea_De_Negocio  $lineaDeNegocio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Linea_De_Negocio $lineaDeNegocio)
    {
        //
    }
}
