<?php

use App\Http\Controllers\admin\AboutSectionController;
use App\Http\Controllers\admin\BlogSectionController;
use App\Http\Controllers\admin\CategoryBlogSectionController;
use App\Http\Controllers\admin\CategoryPortfolioSectionController;
use App\Http\Controllers\admin\ClientsSectionController;
use App\Http\Controllers\admin\FeaturesSectionController;
use App\Http\Controllers\admin\HeaderSliderSectionController;
use App\Http\Controllers\admin\PortfolioSectionController;
use App\Http\Controllers\admin\SearchAboutController;
use App\Http\Controllers\admin\SearchBlogSectionController;
use App\Http\Controllers\admin\SearchCategoriesBlogSectionController;
use App\Http\Controllers\admin\SearchCategoryPortfolioController;
use App\Http\Controllers\admin\SearchClientsController;
use App\Http\Controllers\admin\SearchHeaderSliderController;
use App\Http\Controllers\admin\SearchPortfoliosController;
use App\Http\Controllers\admin\SearchServiceSectionController;
use App\Http\Controllers\admin\SearchSkillSectionController;
use App\Http\Controllers\admin\SearchTeamController;
use App\Http\Controllers\admin\SearchTestimonialSectionController;
use App\Http\Controllers\admin\ServicesSectionController;
use App\Http\Controllers\admin\SkillSectionController;
use App\Http\Controllers\admin\TeamSectionController;
use App\Http\Controllers\admin\TestimonialsSectionController;
use App\Http\Controllers\SiteController;
use App\Models\admin\FeatureSection;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'HOME_PAGE'])->name('home-page');
Route::get('/about-page', [SiteController::class, 'ABOUT_PAGE'])->name('about-page');
Route::get('/team-page', [SiteController::class, 'TEAM_PAGE'])->name('team-page');
Route::get('/testimonials-page', [SiteController::class, 'TESTIMONIALS_PAGE'])->name('testimonials-page');
Route::get('/services-page', [SiteController::class, 'SERVICES_PAGE'])->name('services-page');
Route::get('/portfolio-page', [SiteController::class, 'PORTFOLIO_PAGE'])->name('portfolio-page');
Route::get('/pricing-page', [SiteController::class, 'PRICING_PAGE'])->name('pricing-page');
Route::get('/blog-page', [SiteController::class, 'BLOG_PAGE'])->name('blog-page');
Route::get('/blog-single-page', [SiteController::class, 'BLOG_SINGLE_PAGE'])->name('blog-single-page');
Route::get('/contact-page', [SiteController::class, 'CONTACT_PAGE'])->name('contact-page');


// admin controllers
Route::prefix('admin')->name('admin.')->group(function() {
  Route::resource('header-slider-section', HeaderSliderSectionController::class);
  Route::resource('about-section', AboutSectionController::class);
  Route::resource('clients-section', ClientsSectionController::class);
  Route::resource('services-section', ServicesSectionController::class);
  Route::resource('category-portfolio-section', CategoryPortfolioSectionController::class);
  Route::resource('portfolio-section', PortfolioSectionController::class);
  Route::resource('team-section', TeamSectionController::class);
  Route::resource('skills-section', SkillSectionController::class);
  Route::resource('testimonials-section', TestimonialsSectionController::class);
  Route::resource('features-section', FeaturesSectionController::class);
  Route::resource('blog-section', BlogSectionController::class);
  Route::resource('category-blog-section', CategoryBlogSectionController::class);
});

  // search items in table of admin Panel
  Route::get('/header-slider-section/search',[SearchHeaderSliderController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table');
  Route::get('/about-section-search', [SearchAboutController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-about');
  Route::get('/clients-section-search', [SearchClientsController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-clients');
  Route::get('/services-section-search', [SearchServiceSectionController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-services');
  Route::get('/category-portfolio-section-search', [SearchCategoryPortfolioController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-category-portfolio');
  Route::get('/portfolio-section-search', [SearchPortfoliosController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-portfolios');
  Route::get('/team-section-search', [SearchTeamController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-team');
  Route::get('/skill-section-search', [SearchSkillSectionController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-skills');
  Route::get('/testimonials-section-search', [SearchTestimonialSectionController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-testimonials');
  Route::get('/features-section-search', [FeaturesSectionController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-features');
  Route::get('/categories-of-blog-section-search', [SearchCategoriesBlogSectionController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-category-of-blog-section');
  Route::get('/blog-section-search', [SearchBlogSectionController::class, 'SEARCH_ITEM_IN_TABLE'])->name('search-item-in-table-blog-section-search');
  //

  // category portfolio
  Route::get('/category-portfolio/{id}', [SiteController::class, 'CATEGORY_PORTFOLIO'])->name('category-portfolio');
  Route::get('/portfolio-detail', [SiteController::class, 'PORTFOLIO_DETAIL'])->name('portfolio-detail');
  Route::get('/portfolio-category-another/{id}', [SiteController::class, 'CATEGORY_PORTFOLIO_ANOTHER'])->name('portfolio-category-another');
  //


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
