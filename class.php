<?php
class Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->double("price",8,2);
            $table->string("image");
            $table->integer("quantity");
            $table->string("categoryID")->default('');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
?>