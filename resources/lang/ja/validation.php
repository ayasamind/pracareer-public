<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデタークラスにより使用されるデフォルトのエラー
    | メッセージです。サイズルールのようにいくつかのバリデーションを
    | 持っているものもあります。メッセージはご自由に調整してください。
    |
    */

    'accepted'             => ':attributeを承認してください',
    'active_url'           => ':attributeが有効なURLではありません',
    'after'                => ':attributeには、:dateより後の日付を指定してください',
    'after_or_equal'       => ':attributeには、:date以前の日付を指定してください',
    'alpha'                => ':attributeはアルファベットのみがご利用できます',
    'alpha_dash'           => ':attributeはアルファベットとダッシュ(-)及び下線(_)がご利用できます',
    'alpha_num'            => ':attributeはアルファベット数字がご利用できます',
    'array'                => ':attributeは配列でなくてはなりません',
    'before'               => ':attributeには、:dateより前の日付をご利用ください',
    'before_or_equal'      => ':attributeには、:date以前の日付をご利用ください',
    'between'              => [
        'numeric' => ':attributeは、:minから:maxの間で指定してください',
        'file'    => ':attributeは、:min kBから、:max kBの間で指定してください',
        'string'  => ':attributeは、:min文字から、:max文字の間で指定してください',
        'array'   => ':attributeは、:min個から:max個の間で指定してください',
    ],
    'boolean'              => ':attributeは、trueかfalseを指定してください',
    'confirmed'            => ':attributeと確認フィールドが、一致していません',
    'date'                 => ':attributeには有効な日付を指定してください',
    'date_format'          => ':attributeは:format形式で指定してください',
    'different'            => ':attributeと:otherには、異なった内容を指定してください',
    'digits'               => ':attributeは:digits桁で指定してください',
    'digits_between'       => ':attributeは:min桁から:max桁の間で指定してください',
    'dimensions'           => ':attributeの図形サイズが正しくありません',
    'distinct'             => ':attributeには異なった値を指定してください',
    'email'                => ':attributeには、有効なメールアドレスを指定してください',
    'exists'               => '選択された:attributeは正しくありません',
    'file'                 => ':attributeにはファイルを指定してください',
    'filled'               => ':attributeに値を指定してください',
    'gt'                   => [
        'numeric' => ':attributeには、:valueより大きな値を指定してください',
        'file'    => ':attributeには、:value kBより大きなファイルを指定してください',
        'string'  => ':attributeは、:value文字より長く指定してください',
        'array'   => ':attributeには、:value個より多くのアイテムを指定してください',
    ],
    'gte'                  => [
        'numeric' => ':attributeには、:value以上の値を指定してください',
        'file'    => ':attributeには、:value kB以上のファイルを指定してください',
        'string'  => ':attributeは、:value文字以上で指定してください',
        'array'   => ':attributeには、:value個以上のアイテムを指定してください',
    ],
    'image'                => ':attributeには画像ファイルを指定してください',
    'in'                   => '選択された:attributeは正しくありません',
    'in_array'             => ':attributeには:otherの値を指定してください',
    'integer'              => ':attributeは整数で指定してください',
    'ip'                   => ':attributeには、有効なIPアドレスを指定してください',
    'ipv4'                 => ':attributeには、有効なIPv4アドレスを指定してください',
    'ipv6'                 => ':attributeには、有効なIPv6アドレスを指定してください',
    'json'                 => ':attributeには、有効なJSON文字列を指定してください',
    'lt'                   => [
        'numeric' => ':attributeには、:valueより小さな値を指定してください',
        'file'    => ':attributeには、:value kBより小さなファイルを指定してください',
        'string'  => ':attributeは、:value文字より短く指定してください',
        'array'   => ':attributeには、:value個より少ないアイテムを指定してください',
    ],
    'lte'                  => [
        'numeric' => ':attributeには、:value以下の値を指定してください',
        'file'    => ':attributeには、:value kB以下のファイルを指定してください',
        'string'  => ':attributeは、:value文字以下で指定してください',
        'array'   => ':attributeには、:value個以下のアイテムを指定してください',
    ],
    'max'                  => [
        'numeric' => ':attributeには、:max以下の数字を指定してください',
        'file'    => ':attributeには、:max kB以下のファイルを指定してください',
        'string'  => ':attributeは、:max文字以下で指定してください',
        'array'   => ':attributeは:max個以下指定してください',
    ],
    'mimes'                => ':attributeには:valuesタイプのファイルを指定してください',
    'mimetypes'            => ':attributeには:valuesタイプのファイルを指定してください',
    'min'                  => [
        'numeric' => ':attributeには、:min以上の数字を指定してください',
        'file'    => ':attributeには、:min kB以上のファイルを指定してください',
        'string'  => ':attributeは、:min文字以上で指定してください',
        'array'   => ':attributeは:min個以上指定してください',
    ],
    'not_in'               => '選択された:attributeは正しくありません',
    'not_regex'            => ':attributeの形式が正しくありません',
    'numeric'              => ':attributeには、数字を指定してください',
    'present'              => ':attributeが存在していません',
    'regex'                => ':attributeに正しい形式を指定してください',
    'required'             => ':attributeは必ず指定してください',
    'required_if'          => ':otherが:valueの場合、:attributeも指定してください',
    'required_unless'      => ':otherが:valuesでない場合、:attributeを指定してください',
    'required_with'        => ':valuesを指定する場合は、:attributeも指定してください',
    'required_with_all'    => ':valuesを指定する場合は、:attributeも指定してください',
    'required_without'     => ':valuesを指定しない場合は、:attributeを指定してください',
    'required_without_all' => ':valuesのどれも指定しない場合は、:attributeを指定してください',
    'same'                 => ':attributeと:otherには同じ値を指定してください',
    'size'                 => [
        'numeric' => ':attributeは:sizeを指定してください',
        'file'    => ':attributeのファイルは、:sizeキロバイトでなくてはなりません',
        'string'  => ':attributeは:size文字で指定してください',
        'array'   => ':attributeは:size個指定してください',
    ],
    'string'               => ':attributeは文字列を指定してください',
    'timezone'             => ':attributeには、有効なゾーンを指定してください',
    'unique'               => ':attributeの値は既に存在しています',
    'uploaded'             => ':attributeのアップロードに失敗しました',
    'url'                  => ':attributeに正しい形式を指定してください',
    'max_number' => ':attributeは最大:paramつまで選択できます',
    'invalid_password' => '現在のパスワードが異なります',
    'required_if_publish_and_no_image' => 'ステータスが公開の時は、メイン画像は必須です',
    'no_min_if_not_publish' => 'ステータスが公開の時は、「会社について」「強み」は100文字以上で入力してください',

    /*
    |--------------------------------------------------------------------------
    | Custom バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | "属性.ルール"の規約でキーを指定することでカスタムバリデーション
    | メッセージを定義できます。指定した属性ルールに対する特定の
    | カスタム言語行を手早く指定できます。
    |
    */

    'custom' => [
        '属性名' => [
            'ルール名' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性名
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、例えば"email"の代わりに「メールアドレス」のように、
    | 読み手にフレンドリーな表現でプレースホルダーを置き換えるために指定する
    | 言語行です。これはメッセージをよりきれいに表示するために役に立ちます。
    |
    */

    'attributes' => [
        'email'        => 'メールアドレス',
        'phone_number' => '電話番号',
        'password'     => 'パスワード',
        'name'         => 'ユーザー名',
        'birthday'     => '生年月日',
        'user_gender'  => '性別',
        'university'   => '所属大学',
        'graduate_year'=> '卒業年度(西暦)',
        'department'   => '学部',
        'job_type'     => '第一希望職種',
        'profile_img'  => 'プロフィール画像',
        'profile_img_url' => 'プロフィール画像',
        'project'      => '事業内容',
        'average_age'  => '平均年齢',
        'member_count' => '社員数',
        'established_at' => '設立日',
        'address'      => '住所',
        'company_img'  => '企業ロゴ',
        'site_url'     => 'サイトURL',
        'job_type' => '希望職種',
        'industry_type' => '希望業界',
        "description"  => "会社について",
        "character"    => "強み（独自性など）",
        'title' => 'タイトル',
        'body' => '内容',
        'demand' => "インターン生に求めること（仕事内容の紹介や求める人物像などについて）",
        'experience' => "インターンで経験できること",
        'place' => '勤務地',
        'salary' => '給与',
        'term' => '希望期間',
        'shift' => '希望頻度（シフト）',
        'main_image_url' => 'メイン画像',
        'sub_image_url1' => 'サブ画像1',
        'sub_image_url2' => 'サブ画像2',
        'sub_image_url3' => 'サブ画像3',
        'job_ids' => '職種',
        'industry_ids' => '業界',
        'sub_title' => 'サブタイトル',
        'status' => 'ステータス',
        'prefecture' => '都道府県',
        'old_password' => '現在のパスワード',
        'password_confirmation' => '新しいパスワード(確認用)',
        'strength_ids' => '自分の強み',
        'student_profile' => [
            'address' => '住所',
            'come_from' => '出身地',
            'skill' => '持っているスキル',
            'belongs_to' => '所属団体',
            'self_pr' => '自己PR',
            'value' => '大事にしてる価値観',
            'character' => '自分の強みと弱み',
            'challenge' => '大学時代チャレンジしたいこと',
            'terms' => 'インターン希望期間',
            'self_pr' => '自己PR',
        ]
    ],

];