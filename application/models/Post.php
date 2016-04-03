<?php 
Class Post extends CI_model
{
  public function __construct()
  {
    $this->load->library('form_validation');
  }
  public function create_post($post_content)
  {
    // $config = array(array(
    //                      'field' => 'comment', 
    //                      'label' => 'Post Comment', 
    //                      'rules' => 'trim|required'
    //                     )
    //              );
    // $this->form_validation->set_rules($config);
    // if ($this->form_validation->run() == FALSE)
    // {
    //   $data["post_created"] = FALSE;
    //   $data["error_message"] = validation_errors();
    // }
    // else
    // {

    // var_dump($post_content);
    // die();
      $post_data = array(
          						   'user_id'  	=> $post_content['post_created_for'],
          						   'created_by' => $post_content['post_created_by'],
          						   'number_of_pokes' => $post_content['one_poke']+1,
          						   'created_at' => date("Y-m-d H:i:s"),
          						   'updated_at' => date("Y-m-d H:i:s")
                        );
      if($this->db->insert('posts', $post_data))
      {
        $data["post_created"] = TRUE;
        $data["success_message"] = "Post created successfully!";
      } 
		// }
    // return $data;	



  }

  function update_post($user,$poke)
  {


    $update_data =  array('number_of_pokes' => $poke,
                          'user_id' => $user["post_created_for"],
                          'created_by' => $user["post_created_by"]

                          );
    // $this->db->where('id', $user["post_created_for"]);
    return $this->db->insert('posts', $update_data);
  }

  function get_post_details_by_id($id)
  {
    
    $user_fetch_query = "SELECT DISTINCT(users.name), MAX(posts.number_of_pokes)
    from posts join users on posts.created_by = users.id  WHERE posts.user_id = ?  group by users.id 
    ORDER by MAX(posts.number_of_pokes) DESC";
    return $this->db->query($user_fetch_query, $id)->result_array();
  }

  

 function get_post_numbers_by_id($id)
  {
    
    $user_fetch_query = "SELECT count(DISTINCT(users.name))
    from posts join users on posts.created_by = users.id WHERE posts.user_id=?";
    return $this->db->query($user_fetch_query, $id)->result_array();
  }


  function get_user_id_with_post_id($post_id)
  {
    return($this->db->query("SELECT user_id FROM posts WHERE id = ?", $post_id )->row_array());
  }  
}
?>