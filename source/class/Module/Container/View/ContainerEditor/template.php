


<div class="navigation-container-editor">


    <div class="row">

        <div class="col-4">


            <div class="json-editor-container" style="border: solid 1px #F00;"></div>

        </div>

        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <fieldset>
                        <label>Label <input/></label>
                    </fieldset>

                    <fieldset>
                        <label>Type
                            <select>
                                <option>URL</option>
                                <option>Route</option>
                            </select>
                        </label>
                    </fieldset>

                    <fieldset>
                        <label>Sélection route</label>
                        <span class="plk-route-selector"></span>
                    </fieldset>
                </div>

                <div class="col-6">

                    <fieldset>
                        <label>Nom du paramètre <input/></label>
                    </fieldset>

                    <fieldset>
                        <label>Type du paramètre
                            <select>
                                <option>Valeur</option>
                                <option>Chargeur d'object</option>
                            </select>
                        </label>
                    </fieldset>

                    <div class="entity-selector-placeholder" style="border: solid 1px #F00"></div>

                    <!--
                    <fieldset>
                        <label>Type d'object
                            <select>
                                <option>Article</option>
                            </select>
                        </label>
                    </fieldset>

                    <fieldset>
                        <label>Méthode de chargement
                            <select>
                                <option>Par ID</option>
                                <option>Par propriété</option>
                            </select>
                        </label>
                    </fieldset>

                    <fieldset>
                        <label>Propriété
                            <select>
                                <option>id</option>
                                <option>slug</option>
                            </select>
                        </label>
                        <label>
                            Valeur <input/>
                        </label>
                    </fieldset>
                    //-->




                </div>
            </div>

        </div>

    </div>

</div>
<!--
$navigationDescriptor = array(

    'home' => array(
        'label' => 'Accueil',
        'type' => Item::TYPE_ROUTE,
        'route' => 'home',
    ),

    'programmation' => array(
        'label' => 'Programmation',
        'type' => Item::TYPE_ROUTE,
        'route' => 'category',
        'parameters' => array(
            'category' => array(
                'type' => Item::PARAMETER_ENTITY,
                'entity' => Category::class,
                'loadMethod' => EntityLoader::LOAD_BY_ATTRIBUTE,
                'attributes' => array(
                    'qname' => 'programmation'
                )
            )
        )
    ),
    'about' => array(
        'label' => 'A propos',
        'type' => Item::TYPE_ROUTE,
        'route' => 'article',
        'parameters' => array(
            'category' => array(
                'type' => Item::PARAMETER_ENTITY,
                'entity' => \Planck\Extension\Content\Model\Entity\Article::class,
                'loadMethod' => EntityLoader::LOAD_BY_ATTRIBUTE,
                'attributes' => array(
                    'slug' => 'a-propos'
                )
            )
        )
    )
);
//-->



