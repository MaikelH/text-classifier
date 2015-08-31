<?php
 /*
 *
 * (c) Maikel Hofman <m.hofman@chronos-technology.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chronos\TextClassifier\Classifier;


use Chronos\TextClassifier\Model\DecisionTreeModel;

class DecisionTreeClassifier implements Classifier {

    /**
     * @var DecisionTreeModel
     */
    private $model;

    public function __construct(DecisionTreeModel $model) {

        $this->model = $model;
    }

    /**
     * @return DecisionTreeModel
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Classify the given text using given model. Accepts a array and returns a array with the text as key and the label
     * as value.
     *
     * @param array $data Data to be classified
     * @return Array
     */
    public function Classify($data)
    {
        // TODO: Implement Classify() method.
    }
}