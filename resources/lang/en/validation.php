<?php

const A_RRAY = 'array';
const NUMERIC = 'numeric';
const S_TRING = 'string';
const THE_SELECTED_ATTRIBUTE_IS_INVALID = 'The selected :attribute is invalid.';
const THE_ATTRIBUTE_FORMAT_IS_INVALID = 'The :attribute format is invalid.';

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    A_RRAY => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        NUMERIC => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        S_TRING => 'The :attribute must be between :min and :max characters.',
        A_RRAY => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => THE_SELECTED_ATTRIBUTE_IS_INVALID,
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        NUMERIC => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        S_TRING => 'The :attribute must be greater than :value characters.',
        A_RRAY => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        NUMERIC => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        S_TRING => 'The :attribute must be greater than or equal :value characters.',
        A_RRAY => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => THE_SELECTED_ATTRIBUTE_IS_INVALID,
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        NUMERIC => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        S_TRING => 'The :attribute must be less than :value characters.',
        A_RRAY => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        NUMERIC => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        S_TRING => 'The :attribute must be less than or equal :value characters.',
        A_RRAY => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        NUMERIC => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        S_TRING => 'The :attribute may not be greater than :max characters.',
        A_RRAY => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        NUMERIC => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        S_TRING => 'The :attribute must be at least :min characters.',
        A_RRAY => 'The :attribute must have at least :min items.',
    ],
    'not_in' => THE_SELECTED_ATTRIBUTE_IS_INVALID,
    'not_regex' => THE_ATTRIBUTE_FORMAT_IS_INVALID,
    NUMERIC => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => THE_ATTRIBUTE_FORMAT_IS_INVALID,
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        NUMERIC => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        S_TRING => 'The :attribute must be :size characters.',
        A_RRAY => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    S_TRING => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => THE_ATTRIBUTE_FORMAT_IS_INVALID,
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
