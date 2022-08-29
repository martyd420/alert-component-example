<?php

use Latte\Runtime as LR;

/** source: E:\src\domaci-ukoly\alert-component-example\app\Presenters/templates/@layout.latte */
final class Templated6852def09 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['scripts' => 'blockScripts'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title>Alert</title>
</head>

<body>

';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 12 */ {
			$message = $flash->message /* line 13 */;
			echo '		';
			echo LR\Filters::escapeHtmlText($message) /* line 14 */;
			echo "\n";
			$iterations++;
		}
		echo "\n";
		$this->renderBlock('content', [], 'html') /* line 17 */;
		echo "\n";
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('scripts', get_defined_vars()) /* line 19 */;
		echo '
</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '12'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block scripts} on line 19 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '	<script src="/js/netteForms.min.js"></script>
	<script src="/js/naja.min.js"></script>
	<script src="/js/main.js"></script>
';
	}

}
