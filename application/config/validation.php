<?php

$config = array(

                 'job_application' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Full Name',
                                            'rules' => 'trim|required|alpha|min_length[3]|max_length[25]|xss_clean'
                                         ),
                                    
                                    array(
                                            'field' => 'phone',
                                            'label' => 'Phone Number',
                                            'rules' => 'trim|required|integer|exact_length[10]|xss_clean'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email Address',
                                            'rules' => 'trim|required|valid_email|xss_clean'
                                         ),
                                    // array(
                                    //         'field' => 'experience',
                                    //         'label' => 'Experience',
                                    //         'rules' => 'trim|required|integer|xss_clean'
                                    //      ),
                                    array(
                                            'field' => 'portfolio_url',
                                            'label' => 'Portfolio Url',
                                            'rules' => 'trim|valid_url|xss_clean'
                                         ),
                                    // array(
                                    //         'field' => 'current_company',
                                    //         'label' => 'Current Company',
                                    //         'rules' => 'trim|xss_clean'
                                    //      ),
                                    array(
                                            'field' => 'cover_letter',
                                            'label' => 'Cover Letter',
                                            'rules' => 'trim|xss_clean'
                                         )
                                    
                                    )                          
               );
