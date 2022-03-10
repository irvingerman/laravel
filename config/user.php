<?php
/**
 *File name : user.php  / Date: 3/5/2022 - 12:51 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */
define('USER_RELATIONSHIP_OTHER', 0); // Bố
define('USER_RELATIONSHIP_FATHER', 1); // Bố
define('USER_RELATIONSHIP_MOTHER', 2); // Mẹ
define('USER_RELATIONSHIP_GRANDFATHER', 3); // Ông
define('USER_RELATIONSHIP_GRANDMOTHER', 4); // Bà
define('USER_RELATIONSHIP_BROTHER', 5); // Anh trai
define('USER_RELATIONSHIP_SISTER', 6); // Chị gái
define('USER_RELATIONSHIP_UNCLE_C', 7); // Chú
define('USER_RELATIONSHIP_AUNT', 8); // Cô
define('USER_RELATIONSHIP_UNCLE_B_BOY', 9); // Bác trai
define('USER_RELATIONSHIP_UNCLE_B_GIRL', 10); // Bác gái

define('USER_SCHOOL_STATUS_BLOCK', 0);
define('USER_SCHOOL_STATUS_ACTIVE', 1);
define('USER_SCHOOL_STATUS_DELETED', 2);
define('USER_SCHOOL_NOT_LOGIN', 3);


return [
    'user_relationship_label'        => [
        USER_RELATIONSHIP_OTHER        => 'profile-user.table.other',
        USER_RELATIONSHIP_FATHER       => 'profile-user.table.father',
        USER_RELATIONSHIP_GRANDFATHER  => 'profile-user.table.grandfather',
        USER_RELATIONSHIP_BROTHER      => 'profile-user.table.brother',
        USER_RELATIONSHIP_UNCLE_C      => 'profile-user.table.uncle_c',
        USER_RELATIONSHIP_UNCLE_B_BOY  => 'profile-user.table.uncle',
        USER_RELATIONSHIP_MOTHER       => 'profile-user.table.mother',
        USER_RELATIONSHIP_GRANDMOTHER  => 'profile-user.table.grandmother',
        USER_RELATIONSHIP_SISTER       => 'profile-user.table.sister',
        USER_RELATIONSHIP_AUNT         => 'profile-user.table.aunt',
        USER_RELATIONSHIP_UNCLE_B_GIRL => 'profile-user.table.uncle',
    ],
    'user_relationship_male_label'   => [
        USER_RELATIONSHIP_FATHER      => 'profile-user.table.father',
        USER_RELATIONSHIP_GRANDFATHER => 'profile-user.table.grandfather',
        USER_RELATIONSHIP_BROTHER     => 'profile-user.table.brother',
        USER_RELATIONSHIP_UNCLE_C     => 'profile-user.table.uncle_c',
        USER_RELATIONSHIP_UNCLE_B_BOY => 'profile-user.table.uncle',
    ],
    'user_relationship_female_label' => [
        USER_RELATIONSHIP_MOTHER       => 'profile-user.table.mother',
        USER_RELATIONSHIP_GRANDMOTHER  => 'profile-user.table.grandmother',
        USER_RELATIONSHIP_SISTER       => 'profile-user.table.sister',
        USER_RELATIONSHIP_AUNT         => 'profile-user.table.aunt',
        USER_RELATIONSHIP_UNCLE_B_GIRL => 'profile-user.table.uncle',

    ],
    'relationship'                   => [
        'Bố'       => USER_RELATIONSHIP_FATHER,
        'Daddy'    => USER_RELATIONSHIP_FATHER,
        'Ba'       => USER_RELATIONSHIP_FATHER,
        'Ông'      => USER_RELATIONSHIP_GRANDFATHER,
        'Ông Nội'  => USER_RELATIONSHIP_GRANDFATHER,
        'Anh'      => USER_RELATIONSHIP_BROTHER,
        'Chú'      => USER_RELATIONSHIP_UNCLE_C,
        'Bác'      => USER_RELATIONSHIP_UNCLE_B_BOY,
        'Mẹ'       => USER_RELATIONSHIP_MOTHER,
        'mẹ'       => USER_RELATIONSHIP_MOTHER,
        'Bà'       => USER_RELATIONSHIP_GRANDMOTHER,
        'Bà Nội'   => USER_RELATIONSHIP_GRANDMOTHER,
        'Bà Ngoại' => USER_RELATIONSHIP_GRANDMOTHER,
        'Chị'      => USER_RELATIONSHIP_SISTER,
        'Cô'       => USER_RELATIONSHIP_AUNT,
        'Dì'       => USER_RELATIONSHIP_AUNT,
    ],

    'user_color_status' => [
        USER_SCHOOL_NOT_LOGIN     => '#f9c4cc',
        USER_SCHOOL_STATUS_ACTIVE  => '#00B96A',
        USER_SCHOOL_STATUS_BLOCK => '#ffb822',
    ],
    'user_label_status' => [
        USER_SCHOOL_NOT_LOGIN     => 'v4/school/user.labels.not_login',
        USER_SCHOOL_STATUS_ACTIVE => 'v4/school/user.labels.active',
        USER_SCHOOL_STATUS_BLOCK  => 'v4/school/user.labels.locked',
    ],

    'user_color_gender_chart'  => [
        USER_GENDER_MALE   => '#2786fb',
        USER_GENDER_FEMALE => '#F02F4D',
    ],
    'user_label_gender_chart'  => [
        USER_GENDER_MALE   => 'v4/school/user.labels.male',
        USER_GENDER_FEMALE => 'v4/school/user.labels.female',
    ],
    'user_color_profile_chart' => [
        0 => '#00B96A',
        1 => '#c1c2c7',
    ],
    'user_label_profile_chart' => [
        0 => 'v4/school/user.labels.has_profile',
        1 => 'v4/school/user.labels.have_not_profile',
    ],
    'user_label_code'          => [
        "SM"    => 'v4/school/user.labels.sm',
        "PP"    => 'profile-user.table.principal',
        "AP"    => 'profile-user.table.vice_principal',
        "TC"    => 'profile-user.table.teacher',
        "KT"    => 'profile-user.table.kitchen',
        "OTHER" => 'profile-user.table.vice_principal',
    ],
];