<?php namespace Pyro\Module\Files\Model;

/**
 * Folder model
 *
 * @author   PyroCMS Dev Team
 * @package  PyroCMS\Core\Modules\Keywords\Models
 */
class Folder extends \Illuminate\Database\Eloquent\Model
{
    /**
     * Define the table name
     *
     * @var string
     */
    public $table = 'file_folders';

    /**
     * Disable updated_at and created_at on table
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Get a single folder by slug
     *
     * @param  string $slug The slug of the folder to retrieve
     * @return object
     */
    public static function findBySlug($slug)
    {
        return static::where('slug', '=', $slug)->first();
    }

    /**
     * Get all folders ordered by sort
     *
     * @param string $direction The direction to sort results
     * @return void
     */
    public static function findAndSortBySort($direction = 'asc')
    {
        return static::orderBy('sort', $direction)->get();
    }

    /**
     * Get Folders by parent 
     *
     * @param int $parent_id
     * @return void
     */
    public static function findByParent($parent_id = 0)
    {
        return static::where('parent_id','=',$parent_id)->get();
    }

    /**
     * Get Folders by parent ordered by sort
     *
     * @param int $parent_id
     * @return void
     */
    public static function findByParentAndSortBySort($parent_id = 0)
    {
        return static::where('parent_id','=',$parent_id)->orderBy('sort')->get();
    }

}