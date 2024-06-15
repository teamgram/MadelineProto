<?php declare(strict_types=1);
/**
 * QuizCorrectAnswersTooMuchError error.
 *
 * This file is part of MadelineProto.
 * MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 * You should have received a copy of the GNU General Public License along with MadelineProto.
 * If not, see <http://www.gnu.org/licenses/>.
 *
 * @author    Daniil Gentili <daniil@daniil.it>
 * @copyright 2016-2024 Daniil Gentili <daniil@daniil.it>
 * @license   https://opensource.org/licenses/AGPL-3.0 AGPLv3
 * @link https://docs.madelineproto.xyz MadelineProto documentation
 */

namespace danog\MadelineProto\RPCError;

use danog\MadelineProto\RPCErrorException;

/**
 * You specified too many correct answers in a quiz, quizzes can only have one right answer!
 */
final class QuizCorrectAnswersTooMuchError extends RPCErrorException
{
    protected function __construct(string $caller, ?\Exception $previous = null)
    {
        parent::__construct('QUIZ_CORRECT_ANSWERS_TOO_MUCH', 'You specified too many correct answers in a quiz, quizzes can only have one right answer!', 400, $caller, $previous);
    }
}