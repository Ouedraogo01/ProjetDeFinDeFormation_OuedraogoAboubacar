<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TuteurController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/delete-etudiant/{id}', [UsersController::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}', [UsersController::class, 'update_etudiant']);
Route::post('/update/traitement', [UsersController::class, 'update_etudiant_traitement']);
Route::get('/etudiant', [UsersController::class, 'liste_etudiant']);
Route::get('/ajouter', [UsersController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [UsersController::class, 'ajouter_etudiant_traitement']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/tuteur', [TuteurController::class, 'liste_tuteur']);
Route::get('/ajouterTuteur', [TuteurController::class, 'ajouterTuteur_tuteur']);
Route::get('/delete-tuteur/{id}', [TuteurController::class, 'delete_tuteur']);
Route::get('/update-tuteur/{id}', [TuteurController::class, 'update_tuteur']);
Route::post('/update/traitement', [TuteurController::class, 'update_tuteur_traitement']);
Route::post('/ajouterTuteur/traitement', [TuteurController::class, 'ajouterTuteur_tuteur_traitement']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/tag', [TagController::class, 'liste_tag']);
Route::get('/ajouterTag', [TagController::class, 'ajouterTag_tag']);
Route::get('/deleteTag-tag/{id}', [TagController::class, 'deleteTag_tag']);
Route::get('/updateTag-tag/{id}', [TagController::class, 'updateTag_tag']);
Route::post('/ajouterTag/traitement', [TagController::class, 'ajouterTag_tag_traitement']);
Route::post('/updateTag/traitement', [TagController::class, 'updateTag_tag_traitement']);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/post', [PostController::class, 'liste_post']);
Route::get('/ajouterPost', [PostController::class, 'ajouterPost_post']);
Route::get('/deletePost-post/{id}', [PostController::class, 'deletePost_post']);
Route::get('/updatePost-post/{id}', [PostController::class, 'updatePost_post']);
Route::post('/updatePost/traitement', [PostController::class, 'updatePost_post_traitement']);
Route::post('/ajouterPost/traitement', [PostController::class, 'ajouterPost_post_traitement']);