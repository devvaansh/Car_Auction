<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function register($data) {
        return $this->db->insert('users', $data);
    }

    public function login($username, $password) {
        $this->db->where('email', $username);
        $query = $this->db->get('users');
        $user = $query->row();

        if (!empty($user) && password_verify($password, $user->password)) {
            if($user->active == 0) { return false; }
            return $user;
        } else {
            return false;
        }
    }


        // Function to update about page data
        public function profile_update($data) {
            // Assuming 'id' is the primary key and you have it in your $data array
            $this->db->where('id', $data['id']);
            return $this->db->update('users', $data);
        }

        public function get_profile($id){

            $this->db->where('id', $id);
            $query = $this->db->get('users');
            return $query->row_array();

        }

        public function get_countries(){

            
        $this->db->from('countries'); 
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null; // or a default image path
        }

        }

        public function is_username_taken($username) {
            $this->db->where('username', $username);
            $query = $this->db->get('users');
            return $query->num_rows() > 0;
        }
        
        public function is_email_taken($email) {
            $this->db->where('email', $email);
            $query = $this->db->get('users');
            return $query->num_rows() > 0;
        }
        
        public function signup($data) {
            // Insert the data into the 'users' table
            $this->db->insert('users', $data);
        
            // Check if the insertion was successful
            if ($this->db->affected_rows() > 0) {
                // Get the ID of the last inserted record
                $last_insert_id = $this->db->insert_id();
        
                // Fetch the data of the last inserted record
                $this->db->where('id', $last_insert_id); // Assuming 'id' is the primary key column
                $query = $this->db->get('users');
        
                // Return the result as an associative array
                return $query->row();
            } else {
                // Return an error or an empty array if insertion failed
                return [];
            }
        }
        public function sellyourcar_is_car_taken($registrationnumber) {
            // $this->db->from('sellyourcar');
            $this->db->where('registrationnumber',$registrationnumber);
            $query = $this->db->get('sellyourcar');
            return $query->num_rows() > 0;
        }
        
        public function sellyourcar_submit($data){
            $this->db->insert('sellyourcar',$data);
            
             // Check if the insertion was successful
            if ($this->db->affected_rows() > 0) {
                // Get the ID of the last inserted record
                $last_insert_id = $this->db->insert_id();
        
                // Fetch the data of the last inserted record
                $this->db->where('id', $last_insert_id); // Assuming 'id' is the primary key column
                $query = $this->db->get('sellyourcar');
        
                // Return the result as an associative array
                return $query->row();
            } else {
                // Return an error or an empty array if insertion failed
                return [];
            }
            
        }


        public function get_body_category(){

            
            $this->db->from('body_category'); 
            $query = $this->db->get();
    
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return null; // or a default image path
            }
    
            }

            public function get_brand_category(){

            
                $this->db->from('brand_category'); 
                $query = $this->db->get();
        
                if ($query->num_rows() > 0) {
                    return $query->result();
                } else {
                    return null; // or a default image path
                }
        
                }

                public function get_buy_method_category(){

            
                    $this->db->from('buy_method_category'); 
                    $query = $this->db->get();
            
                    if ($query->num_rows() > 0) {
                        return $query->result();
                    } else {
                        return null; // or a default image path
                    }
            
                    }     
                    
                    public function get_engine_category(){

            
                        $this->db->from('engine_category'); 
                        $query = $this->db->get();
                
                        if ($query->num_rows() > 0) {
                            return $query->result();
                        } else {
                            return null; // or a default image path
                        }
                
                        }      
                        
            
                        public function get_equipment_category(){

            
                            $this->db->from('equipment_category'); 
                            $query = $this->db->get();
                    
                            if ($query->num_rows() > 0) {
                                return $query->result();
                            } else {
                                return null; // or a default image path
                            }
                    
                            }            


                            public function get_model_category(){

            
                                $this->db->from('model_category'); 
                                $query = $this->db->get();
                        
                                if ($query->num_rows() > 0) {
                                    return $query->result();
                                } else {
                                    return null; // or a default image path
                                }
                        
                                }       
                                
                                
                                public function get_model_year_category(){

            
                                    $this->db->from('model_year_category'); 
                                    $query = $this->db->get();
                            
                                    if ($query->num_rows() > 0) {
                                        return $query->result();
                                    } else {
                                        return null; // or a default image path
                                    }
                            
                                    }  

                                          
                                public function get_fuel_category(){

            
                                    $this->db->from('fuel_category'); 
                                    $query = $this->db->get();
                            
                                    if ($query->num_rows() > 0) {
                                        return $query->result();
                                    } else {
                                        return null; // or a default image path
                                    }
                            
                                    }  



                                    public function is_unique_car_name($category_name, $id = null) {
                                        $this->db->where('car_title', $category_name);
                                        if ($id) {
                                            $this->db->where('id !=', $id);
                                        }
                                        $query = $this->db->get('cars');
                                        return $query->num_rows() == 0;
                                    }
                                
                                    public function is_unique_car_slug($category_slug, $id = null) {
                                        $this->db->where('car_slug', $category_slug);
                                        if ($id) {
                                            $this->db->where('id !=', $id);
                                        }
                                        $query = $this->db->get('cars');
                                        return $query->num_rows() == 0;
                                    }
                                
                                    public function car_added($data){
                                
                                        $this->db->insert('cars', $data);
                                        return $this->db->insert_id();
                                
                                    }

                                    public function car_delete($data) {
                                        // Assuming 'id' is the primary key and you have it in your $data array
                                        $this->db->where('id', $data['id']);
                                        return $this->db->update('cars', $data);
                                    }

                                    public function car_delete_message($data){
                                
                                        $this->db->insert('delete_cars', $data);
                                        return $this->db->insert_id();

                                    }
                                

                                    public function update_car($data) {
                                        // Assuming 'id' is the primary key and you have it in your $data array
                                        $this->db->where('id', $data['id']);
                                        return $this->db->update('cars', $data);
                                    }
                                
                                public function get_cars($limit, $offset)
                                        {
                                            $this->db->limit($limit, $offset);
                                            if ($this->session->userdata('user_id') and $this->session->userdata('user_role')!='admin') {
                                            $this->db->where('post_author_id', $this->session->userdata('user_id'));
                                            }
											else
											{
											if(@$_REQUEST['author']!='')
                                            	{
													$this->db->where('post_author_id', $_REQUEST['author']);
                                            	}
                                            }
											$this->db->where('status','publish');
                                              $this->db->where('auction_status','0');
                                            // Order by the 'created_at' column in descending order to get the latest entries first
                                            $this->db->order_by('id', 'DESC');
                                            
                                            $query = $this->db->get('cars'); // Assuming the table name is 'cars'
                                            return $query->result();
                                        }

                                
                                    public function get_total_cars_count()
                                    {
                                        // Get the user ID from session data
                                          if ($this->session->userdata('user_id') and $this->session->userdata('user_role')!='admin') {
                                            $this->db->where('post_author_id', $this->session->userdata('user_id'));
                                            } // Adjust column name to match your schema
                                        $this->db->where('status','publish');
                                          $this->db->where('auction_status','0');
                                        // Count rows matching the condition
                                        $this->db->from('cars'); // Use from() to specify the table for counting
                                        $count = $this->db->count_all_results();
                                    
                                        return $count;
                                    }
                                
                                    
                                    public function delete_car($id) {
                                        $this->db->where('id', $id);
                                        return $this->db->delete('cars');
                                    }


        
                                    public function get_car_by_id($id) {
                                        $this->db->where('id', $id);
                                        $query = $this->db->get('cars');
                                        return $query->row_array();
                                    }



                                    public function get_all_cars($limit, $offset)
                                    {
                                        $this->db->limit($limit, $offset);
                                         $this->db->where('auction_status', '0' );
                                            $this->db->order_by('id', 'DESC');
                                        $query = $this->db->get('cars'); // Assuming the table name is 'blogs'
                                        return $query->result();
                                    }
                                
                                    public function get_total_all_cars_count()
                                    {
                                        // Get the user ID from session data
                                        // $user_id = $this->session->userdata('user_id');
                                    
                                        // Filter by user ID
                                        // $this->db->where('post_author_id', $user_id); // Adjust column name to match your schema
                                     $this->db->where('auction_status', '0' );
                                        // Count rows matching the condition
                                        $this->db->from('cars'); // Use from() to specify the table for counting
                                        $count = $this->db->count_all_results();
                                    
                                        return $count;
                                    }

                                    
  public function get_car_by_slug($slug) {
    // Define criteria to block certain slugs
    
    // Otherwise, proceed with data retrieval
    $query = $this->db->get_where('cars', array('car_slug' => $slug));
    return $query->row_array();
}


public function get_related_cars($slug) {
    // Retrieve the car details for the given car_id
    $this->db->select('*');
    $this->db->from('cars');
    $this->db->where('car_slug', $slug);
    $car = $this->db->get()->row_array();
    
    if (!$car) {
        return []; // Return an empty array if no car is found
    }
    
    // Get related cars based on the criteria
    $this->db->select('*');
    $this->db->from('cars');
    $this->db->where('car_slug !=', $slug); // Exclude the car with the given ID
    $this->db->where('category', $car['category']);
    // $this->db->where('cat_brand', $car['cat_brand']);
    // $this->db->where('cat_fuel', $car['cat_fuel']);
    $this->db->where('cat_buy_method', $car['cat_buy_method']);
    // $this->db->where('condition', $car['condition']);
       $this->db->where('auction_status', '0' );
    
    $query = $this->db->get();
    return $query->result();
}

public function get_model_categories_by_brands($brand_id) {
    // Ensure $brand_id is a valid integer or sanitize it to avoid SQL injection
    $brand_id = intval($brand_id);
    
    // Set the condition for the query
    $this->db->where('brand_id', $brand_id);
    
    // Execute the query on the 'model_category' table
    $query = $this->db->get('model_category');
    
    // Return the result as an array of rows
    return $query->result_array();
}


public function favourite_add($data){

    $this->db->insert('favourites', $data);
    return $this->db->insert_id();

}

public function is_already_favourite($carid,$user_id){

    $this->db->where('car_id', $carid);
    $this->db->where('user_id', $user_id);
    
    $query = $this->db->get('favourites');
    return $query->num_rows();

}


public function delete_favourite($carid, $user_id) {
    // Set the conditions for deletion
    $this->db->where('car_id', $carid);
    $this->db->where('user_id', $user_id);
    
    // Perform the deletion
    $this->db->delete('favourites');
    
    // Return the number of affected rows to confirm deletion
    return $this->db->affected_rows();
}


public function get_favourites($limit, $offset)
{
    $this->db->limit($limit, $offset);
    $this->db->where('user_id', $this->session->userdata('user_id'));
    // $this->db->where('status','publish');
    // Order by the 'created_at' column in descending order to get the latest entries first
    $this->db->order_by('id', 'DESC');
    
    $query = $this->db->get('favourites'); // Assuming the table name is 'cars'
    return $query->result();
}


public function get_total_favourite_count()
{
// Get the user ID from session data
$user_id = $this->session->userdata('user_id');

// Filter by user ID
$this->db->where('user_id', $user_id); // Adjust column name to match your schema
// $this->db->where('status','publish');
// Count rows matching the condition
$this->db->from('favourites'); // Use from() to specify the table for counting
$count = $this->db->count_all_results();

return $count;
}


public function get_highest_bid($car_id) {
    // Select the maximum value of 'bidding_price'
    $this->db->select_max('bidding_price');
    $this->db->where('car_id', $car_id);
    $query = $this->db->get('bidding');

    // Fetch the result
    $result = $query->row();

    // Return the maximum bidding price, or 0 if no result
    return $result ? $result->bidding_price : 0;
}

public function insert_bid($data) {
    $this->db->insert('bidding', $data);
}

/**
 * Get all active auto-bids for a specific car, excluding a specific user
 * Returns users who have auto-bid enabled and haven't reached their max yet
 */
public function get_active_auto_bids($car_id, $exclude_user_id) {
    $this->db->select('user_id, MAX(max_auto_bid) as max_auto_bid');
    $this->db->from('bidding');
    $this->db->where('car_id', $car_id);
    $this->db->where('user_id !=', $exclude_user_id);
    $this->db->where('is_auto_bid', 1);
    $this->db->where('max_auto_bid IS NOT NULL');
    $this->db->group_by('user_id');
    $this->db->order_by('max_auto_bid', 'DESC'); // Highest max auto-bid first
    
    $query = $this->db->get();
    return $query->result_array();
}


public function get_bid($car_id) {
    // Select all fields from both bidding and users tables
    // $this->db->select('bidding.*, users.*');
    // $this->db->from('bidding');
    // $this->db->join('users', 'users.id = bidding.user_id'); // Join users table on user_id
    // $this->db->where('bidding.car_id', $car_id);
    // $this->db->order_by('bidding.id', 'DESC');
    
        $this->db->where('car_id', $car_id);
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get('bidding');

    // Fetch the result
    return $query->result_array();
}

public function get_bid_with_name($car_id) {
    // Select all fields from both bidding and users tables
    $this->db->select('bidding.*, users.*');
    $this->db->from('bidding');
    $this->db->join('users', 'users.id = bidding.user_id'); // Join users table on user_id
    $this->db->where('bidding.car_id', $car_id);
    $this->db->order_by('bidding.id', 'DESC');
    
    //     $this->db->where('car_id', $car_id);
    // $this->db->order_by('id', 'DESC');
 $query = $this->db->get();

    // Fetch the result
    return $query->result_array();
}


public function get_unique_id_of_user($car_id,$user_id) {
    // Select the maximum value of 'bidding_price'
    $this->db->where('user_id', $user_id);
    $this->db->where('car_id', $car_id);
    $query = $this->db->get('bidding');

    // Fetch the result
    $result = $query->row();

    // Return the maximum bidding price, or 0 if no result
    return $result ? $result->unique_id : 0;
}

public function get_unique_id_of_car($car_id) {
    // Apply where conditions
    $this->db->where('car_id', $car_id);

    // Order by primary key or timestamp column in descending order
    $this->db->order_by('id', 'DESC');  // Assuming 'id' is the primary key

    // Limit to the last row
    $this->db->limit(1);

    // Execute the query
    $query = $this->db->get('bidding');

    // Fetch the result
    $result = $query->row();

    // Return the unique_id of the last row or 0 if no result
    return $result ? $result->unique_id : 0;
}



public function get_total_bid_count($car_id)
{

$this->db->where('car_id', $car_id);
$this->db->from('bidding'); // Use from() to specify the table for counting
$count = $this->db->count_all_results();

return $count;
}

public function update_winner($data) {
    // Assuming 'id' is the primary key and you have it in your $data array
    $this->db->where('id', $data['id']);
    return $this->db->update('cars', $data);
}

public function my_bidding($limit, $offset, $user_id) {
    $this->db->limit($limit, $offset);
    $this->db->select('car_id, user_id, MAX(id) as id, MAX(unique_id) as unique_id, MAX(bidding_price) as bidding_price, MAX(created) as created');
    $this->db->from('bidding');
    $this->db->where('user_id', $user_id);
    $this->db->group_by('car_id');
    $this->db->order_by('created', 'DESC');
    $query = $this->db->get();
    return $query->result();
  }
  
  public function get_my_bidding_count($user_id) {
    $this->db->select('COUNT(DISTINCT car_id) as count');
    $this->db->from('bidding');
    $this->db->where('user_id', $user_id);
    
    $query = $this->db->get();
    $result = $query->row(); // Get the first row of the result
    
    // Check if result is not null and return count, otherwise return 0
    return $result ? $result->count : 0;
}


   public function get_user_by_email($email) {
        $this->db->where('email', $email);
        return $this->db->get('users')->row();
    }

    public function store_reset_token($user_id, $token) {
        $data = array(
            'user_id' => $user_id,
            'token' => $token,
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('password_resets', $data);
    }

    public function verify_reset_token($token) {
        $this->db->where('token', $token);
        $this->db->where('created_at >=', date('Y-m-d H:i:s', strtotime('-1 hour'))); // Token valid for 1 hour
        $result = $this->db->get('password_resets')->row();
        return $result ? $result->user_id : FALSE;
    }

    public function update_password($user_id, $password) {
        $this->db->where('id', $user_id);
        $this->db->update('users', array('password' => $password));
    }

    public function delete_reset_token($token) {
        $this->db->where('token', $token);
        $this->db->delete('password_resets');
    }
    
    public function verify_activation_code($id,$code) {
        $where = array(
            'id' => $id,
            'code' => $code
            );
        $this->db->where($where);
        $result = $this->db->get('users')->row();
        return $result ? $result : FALSE;
    }
    
    public function activate_account($data) {
        $where = array(
            'id' => $data->id,
            'code' => $data->code,
            'email' => $data->email
            );
        $this->db->where($where);
        if($this->db->update('users', array('active' => true))) {
            return true;
        } else {
            return false;
        }
    }
    
    public function get_auction_over_cars($limit, $offset, $search_term = '')
{
    
        $completed_by_user = isset($_GET['completed_by_user']) ? $_GET['completed_by_user'] : '';
        $win_by_user = isset($_GET['win_by_user']) ? $_GET['win_by_user'] : '';
        
    // Sanitize input
    $limit = (int)$limit;
    $offset = (int)$offset;

    $this->db->limit($limit, $offset);
    $this->db->where('status', 'publish');
    $this->db->where('auction_status', '1');
    $this->db->where('cat_buy_method', 3);
    $this->db->where('post_author_id', $this->session->userdata('user_id'));

    // If a search term is provided, filter by car_title
    // if (!empty($search_term)) {
    //     $this->db->like('car_title', $search_term);
    // }
    
    // if (!empty($search_term)) {
    //     $this->db->like('car_title', $search_term);
    // }
    
    //  if (!empty($completed_by_user)) {
    //     $this->db->like('post_author_id', $completed_by_user);
    // }
    
    //   if (!empty($win_by_user)) {
    //     $this->db->like('winner_user_id', $win_by_user);
    // }
    

    $this->db->order_by('id', 'DESC');

    $query = $this->db->get('cars'); // Assuming the table name is 'cars'
    return $query->result();
}



public function get_total_auction_over_cars_count()
{
    $this->db->where('status', 'publish');
    $this->db->where('auction_status', '1');
    $this->db->where('cat_buy_method', 3);
    $this->db->where('post_author_id', $this->session->userdata('user_id'));

    // If a search term is provided, filter by car_title
    // if (!empty($search_term)) {
    //     $this->db->like('car_title', $search_term);
    // }

    $this->db->from('cars'); // Use from() to specify the table for counting
    $count = $this->db->count_all_results();

    return $count;
}


 
                                public function get_dealercars($limit, $offset,$author)
                                        {
                                            $this->db->limit($limit, $offset);
                                            $this->db->where('post_author_id',$author);
                                           
                                            $this->db->where('status','publish');
                                            //   $this->db->where('auction_status','0');
                                            // Order by the 'created_at' column in descending order to get the latest entries first
                                            $this->db->order_by('id', 'DESC');
                                            
                                            $query = $this->db->get('cars'); // Assuming the table name is 'cars'
                                            return $query->result();
                                        }

                                
                                    public function get_dealercars_count($author)
                                    {
                                        // Get the user ID from session data
                                            $this->db->where('post_author_id',$author);
                                       
                                        $this->db->where('status','publish');
                                        //   $this->db->where('auction_status','0');
                                        // Count rows matching the condition
                                        $this->db->from('cars'); // Use from() to specify the table for counting
                                        $count = $this->db->count_all_results();
                                    
                                        return $count;
                                    }
                                    
                                    public function get_dealercars_by_bid($limit, $offset, $user_id) {
    $this->db->limit($limit, $offset);
    $this->db->select('car_id, user_id, MAX(id) as id, MAX(unique_id) as unique_id, MAX(bidding_price) as bidding_price, MAX(created) as created');
    $this->db->from('bidding');
    $this->db->where('user_id', $user_id);
    $this->db->group_by('car_id');
    $this->db->order_by('created', 'DESC');
    $query = $this->db->get();
    return $query->result();
  }
  
  public function get_dealercars_by_bid_count($user_id) {
    $this->db->select('COUNT(DISTINCT car_id) as count');
    $this->db->from('bidding');
    $this->db->where('user_id', $user_id);
    
    $query = $this->db->get();
    $result = $query->row(); // Get the first row of the result
    
    // Check if result is not null and return count, otherwise return 0
    return $result ? $result->count : 0;
}


}
