<?php

namespace App\Policies;

<<<<<<< HEAD
use App\Models\Product;
use App\Models\User;
=======
<<<<<<< HEAD
use App\Models\Product;
use App\Models\User;
=======
use App\Models\User;
use App\Models\product;
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(User $user, Product $product): bool
=======
<<<<<<< HEAD
    public function view(User $user, Product $product): bool
=======
    public function view(User $user, product $product): bool
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(User $user, Product $product): bool
=======
<<<<<<< HEAD
    public function update(User $user, Product $product): bool
=======
    public function update(User $user, product $product): bool
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(User $user, Product $product): bool
=======
<<<<<<< HEAD
    public function delete(User $user, Product $product): bool
=======
    public function delete(User $user, product $product): bool
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(User $user, Product $product): bool
=======
<<<<<<< HEAD
    public function restore(User $user, Product $product): bool
=======
    public function restore(User $user, product $product): bool
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(User $user, Product $product): bool
=======
<<<<<<< HEAD
    public function forceDelete(User $user, Product $product): bool
=======
    public function forceDelete(User $user, product $product): bool
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    {
        //
    }
}
